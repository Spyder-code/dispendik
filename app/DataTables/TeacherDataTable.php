<?php

namespace App\DataTables;

use App\Models\Teacher;

/**
 * Class TeacherDataTable
 */
class TeacherDataTable
{
    /**
     * @return Teacher
     */
    public function get()
    {
        /** @var Teacher $query */
        $query = Teacher::query()->select('teachers.*');

        return $query;
    }
}
