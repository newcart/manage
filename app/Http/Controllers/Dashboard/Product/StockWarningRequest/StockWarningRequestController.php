<?php

namespace App\Http\Controllers\Dashboard\Product\StockWarningRequest;

use App\Helpers\Components\DashboardComponents;
use App\Helpers\Components\DatatableComponent;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\Product\Utils\Variables;
use App\Models\User\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StockWarningRequestController extends Controller
{

    // service to be validated
    protected string $class;

    // permission to be validated
    protected string $method;

    /**
     * Sets class and method for every method in this class for checking permissions.
     */
    public function __construct()
    {
        $this->class = "stock-warning-request";
        $this->method = General::getMethod();
    }

    /**
     * Display a listing of the resource.
     *
     * @return View|Factory|Application|RedirectResponse
     */
    public function index(): View|Factory|Application|RedirectResponse
    {
        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }

        $data = [
            'sidebar' => DashboardComponents::SideBar('dashboard/products/stock-warning-requests', UserHelper::getType()->code),
            'navbar' => DashboardComponents::Navbar(),
            'datatable' => DatatableComponent::createDatatable($this->class . "s", Variables::StockWarningRequestsColumns())
        ];

        return view('dashboard.products.stock_warning_requests.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View|Factory|Application|RedirectResponse
     */
    public function create(): View|Factory|Application|RedirectResponse
    {
        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }

        $data = [
            'sidebar' => DashboardComponents::SideBar('dashboard/products/stock-warning-requests', 'admin'),
            'navbar' => DashboardComponents::Navbar()
        ];

        return view('dashboard.products.stock_warning_requests.create', $data);
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
    public function edit($id)
    {
        //
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
