<?php

namespace App\Http\Controllers\Dashboard\Franchise\Utils;

class Variables
{
    /**
     * @returns string[]
     */
    public static function FranchiseColumns() : array
    {
        return [
            'company_name' => 'Firma Adı',
            'email' => 'E-Posta',
            'bulten' => 'E-Bülten',
            'city' => 'Şehir'
        ];
    }
}
