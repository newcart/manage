<?php

namespace App\Helpers\Components;

use App\Models\Order\Order;

class OrderComponents
{
    public static function TopSelectors(): string
    {
        /** @var array $orderStatus */
        $orderStatus = [
            0 => "Şipariş Durumu",
            1 => "Beklemede",
            2 => "Onaylandı",
            3 => "Hazırlanıyor",
            4 => "Kargoya Verildi",
            5 => "Dağıtıma Çıktı",
            6 => "Teslim Edildi",
            7 => "İptal Edildi",
            8 => "İade Edildi"
        ];

        /** @var array $paymentType */
        $paymentType = [
            0 => "Ödeme Tipi",
            1 => "Nakit",
            2 => "Kredi Kartı",
            3 => "Havale"
        ];

        /** @var array $userType */
        $userType = [
            0 => "Üye Tipi",
            1 => "Müşteri",
            2 => "Bayi"
        ];

        $data = [
            "orderStatus" => $orderStatus,
            "paymentType" => $paymentType,
            "userType" => $userType
        ];

        return view('dashboard.orders._partials._top_selectors', $data)->render();
    }

    public static function MarketplaceOrders(): string
    {

        $data = [
            "akOrderCount" => 519,
            "hbOrderCount" => 519,
            "n11OrderCount" => 519,
            "tdOrderCount" => 519,
            "csOrderCount" => 519,
            "azOrderCount" => 519,
            "epttOrderCount" => 519,
        ];

        return view('dashboard.orders._partials._marketplace_orders', $data)->render();
    }
}
