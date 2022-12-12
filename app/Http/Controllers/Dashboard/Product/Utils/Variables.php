<?php

namespace App\Http\Controllers\Dashboard\Product\Utils;

class Variables {

    /**
     * @return string[]
     */
    public static function ProductOptions() : array
    {
       return [
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
    }

    /**
     * @return string[]
     */
    public static function ProductColumns() : array
    {
        return [
            'product_id' => 'ID',
            'code' => 'Kod',
            'name' => 'Ad',
            'brand' => 'Marka',
            'tax' => 'Vergi',
            'price' => 'Fiyat',
            'created_at' => 'Oluşturma Tarihi',
            'updated_at' => 'Güncelleme Tarihi',
        ];
    }

    /**
     * @return string[]
     */
    public static function BrandColumns() : array {
        return [
            'brand_id' => 'ID',
            'logo' => 'Logo',
            'queue_no' => 'Sıra No',
            'brand_name' => 'Marka Adı',
            'status' => 'Durum'
        ];
    }

    /**
     * @return string[]
     */
    public static function ColorColumns() : array
    {
        return [
            'color_id' => 'ID',
            'color_name' => 'Renk Adı',
            'color_code' => 'Renk Kodu',
            'color_group' => 'Renk Grubu',
            'gg_color' => 'Gittigidiyor Rengi',
            'actions' => 'Eylemler'
        ];
    }

    /**
     * @return string[]
     */
    public static function UnitColumns() : array
    {
        return [
            'unit_name' => 'Birim Adı',
            'actions' => 'Eylemler'
        ];
    }

    /**
     * @return string[]
     */
    public static function TaxColumns() : array
    {
        return [
            'queue_no' => 'Sıra No',
            'tax_name' => 'Vergi Adı',
            'tax_percentage' => 'Vergi Oranı',
            'actions' => 'Eylemler'
        ];
    }

    /**
     * @return string[]
     */
    public static function StockWarningRequestsColumns() : array
    {
        return [
          'queue_no' => 'Sıra No.',
          'email' => 'E-Posta',
            'old_stock' => 'Eski Stok',
            'current_stock' => 'Şimdiki Stok',
            'request_date' => 'İstek Tarihi',
            'seen_date' => 'Görülme Tarihi'
        ];
    }

    /**
     * @return string[]
     */
    public static function SpecGroupColumns() : array
    {
        return [
            'queue_no' => 'Sıra No.',
            'spec_group_name' => 'Adı',
            'spec_group_spec' => 'Alt Özellikler',
            'actions' => 'Eylemler'
        ];
    }

    /**
     * @return string[]
     */
    public static function SpecSetColumns() : array
    {
        return [
            'queue_no' => 'Sıra No.',
            'spec_set_name' => 'Adı',
            'spec_set_spec' => 'Alt Ürün Setleri',
            'actions' => 'Eylemler'
        ];
    }

    /**
     * @return string[]
     */
    public static function ProductQuestionsColumns() : array
    {
        return [
            'date' => 'Tarih',
            'fullname' => 'Ad Soyad',
            'product_name' => 'Ürün Adı',
            'question' => 'Soru',
            'answer' => 'Yanıt',
            'actions' => 'Eylemler'
        ];
    }

    /**
     * @return string[]
     */
    public static function ProductReviewsColumns() : array
    {
        return [
            'date' => 'Tarih',
            'fullname' => 'Ad Soyad',
            'product_name' => 'Ürün Adı',
            'review' => 'İnceleme',
            'answer' => 'Yanıt',
            'actions' => 'Eylemler'
        ];
    }

    /**
     * @return string[]
     */
    public static function PriceWarningRequestsColumns() : array
    {
        return [
            'queue_no' => 'Sıra No.',
            'email' => 'E-Posta',
            'old_price' => 'Eski Fiyat',
            'current_price'=> 'Şuanki Fiyat',
            'request_date' => 'İstek Tarihi',
            'seen_date' => 'Görülme Tarihi'
        ];
    }

    /**
     * @return string[]
     */
    public static function ProviderColumns() : array
    {
        return [
            'queue_no' => 'Sıra No.',
            'provider_name' => 'Tedarikçi Adı',
            'price_multiplier' => 'Fiyat Çarpanı',
            'actions' => 'Eylemler'
        ];
    }
}
