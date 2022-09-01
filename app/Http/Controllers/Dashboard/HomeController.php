<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Components;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $data = [
            'sidebar' => Components::SideBar('dashboard', 'admin'),
            'navbar' => Components::Navbar()
        ];

        return view('dashboard.index', $data);
    }
}
