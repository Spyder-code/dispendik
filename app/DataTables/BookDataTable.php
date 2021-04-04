<?php

namespace App\DataTables;

use App\Models\Book;

/**
 * Class BookDataTable
 */
class BookDataTable
{
    /**
     * @return Book
     */
    public function get()
    {
        /** @var Book $query */
        $query = Book::query()->select('books.*');

        return $query;
    }
}
