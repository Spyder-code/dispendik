<?php

namespace App\DataTables;

use App\Models\Institutional;

/**
 * Class InstitutionalDataTable
 */
class InstitutionalDataTable
{
    /**
     * @return Institutional
     */
    public function get()
    {
        /** @var Institutional $query */
        $query = Institutional::query()->select('institutionals.*');

        return $query;
    }
}
