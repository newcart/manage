<?php

namespace App\Http\Controllers\Dashboard\Campaign\Slide;

use App\Helpers\Components\DashboardComponents;
use App\Helpers\Components\DatatableComponent;
use App\Helpers\General;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DatatableController;
use App\Models\User\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Campaign\Utils\Variables;

class SlideController extends Controller
{
    // service to be validated
    protected string $class;

    // permission to be validated
    protected string $method;

    /**
     * Sets a class and method for every method in this class for checking permissions.
     */
    public function __constructor()
    {
        $this->class = General::getClass();
        $this->method = General::getMethod();
    }

    /**
     * Display a listing of the resource.
     *
     * @return View|Factory|RedirectResponse|Application
     */
    public function index() : View|Factory|RedirectResponse|Application
    {
        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning("Bu işlemi yapmaya yetkiniz bulununmamaktadır.", "Yetki Hatası");
            return redirect()->back();
        }

        $data = [
            'sidebar' => DashboardComponents::SideBar("dashboard/campaigns", "admin"),
            'navbar' => DashboardComponents::Navbar(),
            'datatable' => DatatableComponent::createDatatable($this->class . "s", Variables::SlideColumns())
        ];

        return view('dashboard.campaign.slides.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View|Factory|RedirectResponse|Application
     */
    public function create() : View|Factory|RedirectResponse|Application
    {
        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning("Bu işlemi yapmaya yetkiniz bulununmamaktadır.", "Yetki Hatası");
            return redirect()->back();
        }

        $data = [
            'sidebar' => DashboardComponents::SideBar("dashboard/campaigns", "admin"),
            'navbar' => DashboardComponents::Navbar(),
        ];

        return view('dashboard.campaign.slides.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) : View|Factory|RedirectResponse|Application
    {
        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning("Bu işlemi yapmaya yetkiniz bulununmamaktadır.", "Yetki Hatası");
            return redirect()->back();
        }

        $data = [
            'sidebar' => DashboardComponents::SideBar("dashboard/campaigns", "admin"),
            'navbar' => DashboardComponents::Navbar(),
        ];

        return view('dashboard.campaign.slides.create', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
