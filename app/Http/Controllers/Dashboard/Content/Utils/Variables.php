<?php

namespace App\Http\Controllers\Dashboard\Content\Utils;

class Variables
{
    /**
     * @returns string[]
     */
    public static function ContentColumns() : array
    {
        return [
            'page_titles' => 'Sayfa Başlığı',
            'page_usage' => 'Sayfa Kullanım Alanı',
            'status' => 'Durum'
        ];
    }
}
