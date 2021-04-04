<?php

namespace App\Http\Controllers;

use App\DataTables\TeacherDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Repositories\TeacherRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use App\Models\Book;
use Response;
use Datatables;

class TeacherController extends AppBaseController
{
    /** @var  TeacherRepository */
    private $teacherRepository;

    public function __construct(TeacherRepository $teacherRepo)
    {
        $this->teacherRepository = $teacherRepo;
    }

    /**
     * Display a listing of the Teacher.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new TeacherDataTable())->get())->make(true);
        }

        return view('teachers.index');
    }

    /**
     * Show the form for creating a new Teacher.
     *
     * @return Response
     */
    public function create()
    {
        $bookItems = Book::all()->pluck('title','id');
        return view('teachers.create', compact('bookItems'));
    }

    /**
     * Store a newly created Teacher in storage.
     *
     * @param CreateTeacherRequest $request
     *
     * @return Response
     */
    public function store(CreateTeacherRequest $request)
    {
        $input = $request->all();

        $teacher = $this->teacherRepository->create($input);

        Flash::success('Teacher saved successfully.');

        return redirect(route('teachers.index'));
    }

    /**
     * Display the specified Teacher.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teacher = $this->teacherRepository->find($id);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.show')->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified Teacher.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teacher = $this->teacherRepository->find($id);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.edit')->with('teacher', $teacher);
    }

    /**
     * Update the specified Teacher in storage.
     *
     * @param  int              $id
     * @param UpdateTeacherRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeacherRequest $request)
    {
        $teacher = $this->teacherRepository->find($id);

        if (empty($teacher)) {
            Flash::error('Teacher not found');

            return redirect(route('teachers.index'));
        }

        $teacher = $this->teacherRepository->update($request->all(), $id);

        Flash::success('Teacher updated successfully.');

        return redirect(route('teachers.index'));
    }

    /**
     * Remove the specified Teacher from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teacher = $this->teacherRepository->find($id);

        $teacher->delete();

        return $this->sendSuccess('Teacher deleted successfully.');
    }
}
