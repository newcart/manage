<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Components\DashboardComponents;
use App\Http\Controllers\Controller;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $data = [
            'sidebar' => DashboardComponents::SideBar('dashboard', 'admin'),
            'navbar' => DashboardComponents::Navbar(),
            'cardPartOne' => DashboardComponents::CardPartOne(),
            'cardPartTwo' => DashboardComponents::CardPartTwo(),
            'twinCards' => DashboardComponents::TwinCards(),
            'pieChartScript' => DashboardComponents::PieChart()
        ];

        return view('dashboard.index', $data);
    }
}
