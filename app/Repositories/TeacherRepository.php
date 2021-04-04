<?php

namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\BaseRepository;

/**
 * Class TeacherRepository
 * @package App\Repositories
 * @version April 2, 2021, 9:30 am UTC
*/

class TeacherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'phone',
        'book_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Teacher::class;
    }
}
