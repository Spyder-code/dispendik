<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInstitutionalRequest;
use App\Http\Requests\UpdateInstitutionalRequest;
use App\Repositories\InstitutionalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class InstitutionalController extends AppBaseController
{
    /** @var  InstitutionalRepository */
    private $institutionalRepository;

    public function __construct(InstitutionalRepository $institutionalRepo)
    {
        $this->institutionalRepository = $institutionalRepo;
    }

    /**
     * Display a listing of the Institutional.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $institutionals = $this->institutionalRepository->all();

        return view('institutionals.index')
            ->with('institutionals', $institutionals);
    }

    /**
     * Show the form for creating a new Institutional.
     *
     * @return Response
     */
    public function create()
    {
        return view('institutionals.create');
    }

    /**
     * Store a newly created Institutional in storage.
     *
     * @param CreateInstitutionalRequest $request
     *
     * @return Response
     */
    public function store(CreateInstitutionalRequest $request)
    {
        $input = $request->all();

        $institutional = $this->institutionalRepository->create($input);

        Flash::success('Institutional saved successfully.');

        return redirect(route('account'));
    }

    /**
     * Display the specified Institutional.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $institutional = $this->institutionalRepository->find($id);

        if (empty($institutional)) {
            Flash::error('Institutional not found');

            return redirect(route('institutionals.index'));
        }

        return view('institutionals.show')->with('institutional', $institutional);
    }

    /**
     * Show the form for editing the specified Institutional.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $institutional = $this->institutionalRepository->find($id);

        if (empty($institutional)) {
            Flash::error('Institutional not found');

            return redirect(route('institutionals.index'));
        }

        return view('institutionals.edit')->with('institutional', $institutional);
    }

    /**
     * Update the specified Institutional in storage.
     *
     * @param int $id
     * @param UpdateInstitutionalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstitutionalRequest $request)
    {
        $institutional = $this->institutionalRepository->find($id);

        if (empty($institutional)) {
            Flash::error('Institutional not found');

            return redirect(route('institutionals.index'));
        }

        $institutional = $this->institutionalRepository->update($request->all(), $id);

        Flash::success('Institutional updated successfully.');

        return redirect(route('institutionals.index'));
    }

    /**
     * Remove the specified Institutional from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $institutional = $this->institutionalRepository->find($id);

        if (empty($institutional)) {
            Flash::error('Institutional not found');

            return redirect(route('institutionals.index'));
        }

        $this->institutionalRepository->delete($id);

        Flash::success('Institutional deleted successfully.');

        return redirect(route('institutionals.index'));
    }
}
