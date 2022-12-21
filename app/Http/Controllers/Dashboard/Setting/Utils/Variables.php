<?php

namespace App\Http\Controllers\Dashboard\Setting\Utils;

class Variables
{
    /**
     * @returns string[]
     */
    public static function EmailColumns() : array
    {
        return [
            "email" => "E-Posta Adresi",
            "sender" => "Gönderen",
            "usage" => "Kullanım"
        ];
    }
}
