<?php

namespace App\Imports;

use App\\Report;
use Maatwebsite\Excel\Concerns\ToModel;

class reportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Report([
            //
        ]);
    }
}
