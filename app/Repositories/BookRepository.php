<?php

namespace App\Repositories;

use App\Models\Book;
use App\Repositories\BaseRepository;

/**
 * Class BookRepository
 * @package App\Repositories
 * @version April 2, 2021, 9:27 am UTC
*/

class BookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'author',
        'publication'
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
        return Book::class;
    }
}
