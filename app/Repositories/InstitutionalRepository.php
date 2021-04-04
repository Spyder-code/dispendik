<?php

namespace App\Repositories;

use App\Models\Institutional;
use App\Repositories\BaseRepository;

/**
 * Class InstitutionalRepository
 * @package App\Repositories
 * @version April 2, 2021, 9:35 am UTC
*/

class InstitutionalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'address',
        'npwp',
        'file',
        'active',
        'status'
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
        return Institutional::class;
    }
}
