<?php

namespace App\Http\Controllers;

use App\Helpers\Components;
use App\Helpers\General;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\Product\Brand\Utils\Variables;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $vars = new Variables();
            $data = [
                'sidebar' => Components::SideBar('dashboard/products', 'admin'),
                'navbar' => Components::Navbar(),
                'datatable' => Components::createDatatable($this->class . "s", $vars->Columns())
            ];

            return view('dashboard.brands.index', $data);
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components::SideBar('dashboard', 'admin'),
                'navbar' => Components::Navbar(),
            ];
            return view('dashboard.brands.create', $data);
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
     * @param  \App\Http\Requests\StoreBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}