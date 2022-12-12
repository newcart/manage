<?php

namespace App\Helpers\Components;

class DashboardComponents
{
    public static function SideBar(string $url, string $user_type): string
    {
        $items = config('sidebar.items');

        $data['items'] = [];
        foreach ($items as $item) {
            $item['active'] = false;
            if (in_array($user_type, $item['user_types']) || in_array('*', $item['user_types'])) {
                if ($item['url'] != null && $item['items'] == null) {
                    if($item['url'] == '/' . $url) {
                        $item['active'] = true;
                    }
                }
                $data['sidebarItems'][] = $item;
            }
        }

        return view('layouts._partials._sidebar', $data)->render();
    }

    public static function Navbar(): string
    {
        $user = auth()->user();
        $data['username'] = $user->firstname . ' ' . $user->lastname;
        $data['userAbb'] = $user->firstname[0] . $user->lastname[0];
        return view('layouts._partials._navbar', $data)->render();
    }

    public static function CardPartOne(): string
    {
        $dashboardIndexCards = [
            [
                "icon" => "assets/images/visitor.svg",
                "indicator" => "-5%",
                "indicatorStyle" => "negative",
                "text" => "64",
                "title" => "Tekil Ziyaretçi",
            ],
            [
                "icon" => "assets/images/new-user.svg",
                "indicator" => "+12%",
                "indicatorStyle" => "positive",
                "text" => "32",
                "title" => "Yeni Üye",
            ],
            [
                "icon" => "assets/images/page-view.svg",
                "indicator" => "+5%",
                "indicatorStyle" => "positive",
                "text" => "22",
                "title" => "Sayfa Görüntüleme",
            ],
            [
                "icon" => "assets/images/pending-order.svg",
                "indicator" => "+17%",
                "indicatorStyle" => "positive",
                "text" => "78",
                "title" => "Bekleyen Sipariş",
            ],
            [
                "icon" => "assets/images/approved-order.svg",
                "indicator" => "-52%",
                "indicatorStyle" => "negative",
                "text" => "21",
                "title" => "Onaylanan Sipariş",
            ],
            [
                "icon" => "assets/images/shipped-order.svg",
                "indicator" => "+12%",
                "indicatorStyle" => "positive",
                "text" => "11",
                "title" => "Kargodaki Sipariş",
            ],
            [
                "icon" => "assets/images/remit-info.svg",
                "indicator" => "+17%",
                "indicatorStyle" => "positive",
                "text" => "87",
                "title" => "Havale Bildirimleri",
            ],
            [
                "icon" => "assets/images/new-user.svg",
                "indicator" => "-5%",
                "indicatorStyle" => "negative",
                "text" => "64",
                "title" => "Tekil Ziyaretçi",
            ],
        ];

        $data["dashboardIndexCards"] = $dashboardIndexCards;

        return view('dashboard._partials._card_part_1', $data)->render();
    }

    public static function PieChart(): string
    {
        return view('dashboard._partials._pie_chart_script')->render();
    }

    public static function CardPartTwo(): string
    {
        $cards = [
            [
                "icon" => "assets/images/order-count.svg",
                "indicator" => "-25%",
                "indicatorStyle" => "negative",
                "text" => "21",
                "title" =>"Sipariş Sayısı"
            ],
            [
                "icon" => "assets/images/pending-comment.svg",
                "indicator" => "-25%",
                "indicatorStyle" => "negative",
                "text" => "21",
                "title" =>"Onay Bekleyen Yorum"
            ],
            [
                "icon" => "assets/images/pending-question.svg",
                "indicator" => "-25%",
                "indicatorStyle" => "negative",
                "text" => "21",
                "title" =>"Cevap Bekleyen Soru"
            ],
        ];

        $data["cards"] = $cards;

        return view('dashboard._partials._card_part_2', $data)->render();
    }

    public static function TwinCards(): string
    {
        $twinCards = [
            [
                "icon" => "assets/images/visitor.svg",
                "text" => "87",
                "title" => "Online Kullanıcı Sayısı"
            ],
            [
                "icon" => "assets/images/unread-message.svg",
                "text" => "02",
                "title" => "Okunmamış Mesaj"
            ]
        ];

        $data["twinCards"] = $twinCards;

        return view('dashboard._partials._twin_card', $data)->render();
    }
}
