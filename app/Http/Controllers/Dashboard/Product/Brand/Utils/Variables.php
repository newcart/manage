<?php

namespace App\Http\Controllers\Dashboard\Product\Brand\Utils;

class Variables {
    public function Columns() : Array {
        $cols = [
            'brand_id' => 'ID',
            'logo' => 'Logo',
            'queue_no' => 'Sıra No',
            'brand_name' => 'Marka Adı',
            'status' => 'Durum'
        ];

        return $cols;
    }
}
