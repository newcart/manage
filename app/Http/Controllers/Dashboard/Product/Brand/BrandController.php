<?php

namespace App\Http\Controllers\Dashboard\Product\Brand;

use App\Helpers\Components;
use App\Helpers\Components\DashboardComponents;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\Product\Utils\Variables;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Product\Brand;
use App\Models\User\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BrandController extends Controller
{
    //service to be validated
    protected string $class;

    //permission to be validated
    protected string $method;

    /**
     * Sets class and method for every method in this class for checking permissions.
     */
    public function __construct()
    {
        $this->class = General::getClass();
        $this->method = General::getMethod();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|RedirectResponse
     */
    public function index() : Application|Factory|View|RedirectResponse
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components\DashboardComponents::SideBar('dashboard/products', UserHelper::getType()->code),
                'navbar' => Components\DashboardComponents::Navbar(),
                'datatable' => Components\DatatableComponent::createDatatable($this->class . "s", Variables::BrandColumns())
            ];

            return view('dashboard.products.brands.index', $data);
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|RedirectResponse
     */
    public function create() : Application|Factory|View|RedirectResponse
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components\DashboardComponents::SideBar('dashboard', UserHelper::getType()->code),
                'navbar' => Components\DashboardComponents::Navbar(),
            ];
            return view('dashboard.products.brands.create', $data);
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBrandRequest $request
     * @return Application|Factory|View|RedirectResponse
     */
    public function store(StoreBrandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Brand  $brand
     * @return Application|Factory|View|RedirectResponse
     */
    public function edit(Brand $brand) : Application|Factory|View|RedirectResponse
    {
        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning("Bu işlemi yapmaya yetkiniz bulunmamaktadır.", "Yetersiz Yetki");
            return redirect()->back();
        }

        $data = [
            "sidebar" => DashboardComponents::SideBar("dashboard/franchise", UserHelper::getType()->code),
            "navbar" => DashboardComponents::Navbar()
        ];

        return \view('dashboard.products.brands.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Product\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
