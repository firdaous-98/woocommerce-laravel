<?php

namespace App\Imports;

use App\productImport;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new productImport([

            'name' => $row[0],
            'description'=>$row[1],
            'short_description'=>$row[2],
            'sale_price'=>$row[3],
            'regular_price' => $row[4], //
        ]);
    }
}