<?php

namespace App\Http\Controllers\Dashboard\Payment\Utils;

class Variables
{
    /**
     * @returns string[]
     */
    public static function EFTColumns() : array
    {
        return [
            "queue_no" => "Sıra",
            "bank_name" => "Banka",
            "account_no" => "Hesap No",
            "iban" => "IBAN"
        ];
    }

    /**
     * @returns string[]
     */
    public static function VirtualPOSColumns() : array
    {
        return [
            "logo" => "Logo",
            "bank_name" => "Banka",
            "main_pos" => "Ana POS",
            "status" => "Durum"
        ];
    }

    /**
     * @returns string[]
     */
    public static function SettingColumns() : array
    {
        return [
            "queue_no" => "Sıra",
            "payment" => "Ödeme Türü Adı",
            "status" => "Durum"
        ];
    }

    /**
     * @returns string[]
     */
    public static function EFTNotificationColumns() : array
    {
        return [
            "queue_no" => "Sıra",
            "customer_name" => "Müşteri Adı",
            "order_no" => "Sipariş No",
            "sender" => "Gönderen",
            "account" => "Hesap",
            "date" => "Tarih",
            "amount" => "Tutar",
            "referans" => "Referans No.",
            "description" => "Açıklama"
        ];
    }
}
