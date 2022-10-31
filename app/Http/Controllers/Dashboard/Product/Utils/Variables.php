<?php

namespace App\Http\Controllers\Dashboard\Product\Utils;

class Variables {
    public function Options() : Array {
        $options = [
            [
                "value" => "0",
                "name" => "Tümü"
            ],
            [
                "value" => "1",
                "name" => "Stoklular"
            ],
            [
                "value" => "2",
                "name" => "Azalan Stoklar"
            ],
            [
                "value" => "3",
                "name" => "Biten Stoklar"
            ],
            [
                "value" => "4",
                "name" => "Fiyatı 0 TL"
            ],
            [
                "value" => "5",
                "name" => "Kategorisiz"
            ],
            [
                "value" => "6",
                "name" => "Markasız"
            ],
            [
                "value" => "7",
                "name" => "Varyantsız"
            ],
            [
                "value" => "8",
                "name" => "Son 24 Saatte Harekete Giren Ürünler"
            ],
            [
                "value" => "9",
                "name" => "Son 24 Saatte Tükenenler"
            ],
            [
                "value" => "10",
                "name" => "Pasif Ürünler"
            ]
        ];

        return $options;
    }

    public function Columns() : Array {
        $cols = [
            'product_id' => 'ID',
            'code' => 'Kod',
            'name' => 'Ad',
            'brand' => 'Marka',
            'tax' => 'Vergi',
            'price' => 'Fiyat',
            'created_at' => 'Oluşturma Tarihi',
            'updated_at' => 'Güncelleme Tarihi',
        ];

        return $cols;
    }
}
