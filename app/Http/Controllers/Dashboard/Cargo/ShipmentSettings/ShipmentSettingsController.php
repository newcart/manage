<?php

namespace App\Http\Controllers\Dashboard\Cargo\ShipmentSettings;

use App\Helpers\Components\DashboardComponents;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ShipmentSettingsController extends Controller
{
    protected string $class;

    protected string $method;

    public function __construct()
    {
        $this->class = General::getClass();
        $this->method = General::getMethod();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View|Factory|RedirectResponse|Application
     */
    public function edit() : View|Factory|RedirectResponse|Application
    {
        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }

        $data = [
            'sidebar' => DashboardComponents::SideBar('dashboard/cargo', UserHelper::getType()->code),
            'navbar' => DashboardComponents::Navbar(),
        ];
        return view('dashboard.cargo.shipment_settings.edit', $data);
    }
}
