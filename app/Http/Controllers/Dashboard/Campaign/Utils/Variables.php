<?php

namespace App\Http\Controllers\Dashboard\Campaign\Utils;

class Variables
{
    /**
     * @return string[]
     */
    public static function SlideColumns(): array
    {
        return [
            'slide_type' => 'Slayt Tipi',
            'description' => 'Açıklama',
            'time' => 'Süre'
        ];
    }

    /**
     * @return string[]
     */
    public static function ProductCampaignColumns(): array
    {
        return [
            'queue_no' => 'Sıra',
            'image' => 'Görsel',
            'product_code' => 'Ürün Kodu',
            'price' => 'Fiyat',
            'date' => 'Tarih',
            'terms' => 'Şartlar'
        ];
    }

    /**
     * @return string[]
     */
    public static function GiftcardColumns() : array
    {
        return [
            'giftcard_code' => 'Hediye Çeki Kodu',
            'time' => 'Geçerlilik Tarihi',
            'description' => 'Açıklama',
            'status' => 'Durum'
        ];
    }
}
