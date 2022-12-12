<?php

namespace App\Http\Controllers\Dashboard\Product\Category;

use App\Helpers\Components;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Models\User\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CategoryController extends Controller
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
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        $cols = [
            'category_id' => 'No',
            'name' => 'Name',
            'product_count' => 'Product Count',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];

        $data = [
            'sidebar' => Components\DashboardComponents::SideBar('dashboard/categories', UserHelper::getType()->code),
            'navbar' => Components\DashboardComponents::Navbar(),
            'datatable' => Components\DatatableComponent::createDatatable("categories", $cols),
        ];

        return view('dashboard.products.categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|RedirectResponse
     */
    public function create(): Application|Factory|View|RedirectResponse
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components\DashboardComponents::SideBar('dashboard', 'admin'),
                'navbar' => Components\DashboardComponents::Navbar(),
            ];
            return view('dashboard.products.categories.create', $data);
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
     * @return Response
     */
    public function store(): Response
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function show(Category $category): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Category $category): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Category $category
     * @return Response
     */
    public function update(Category $category): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(Category $category): Response
    {
        //
    }
}
