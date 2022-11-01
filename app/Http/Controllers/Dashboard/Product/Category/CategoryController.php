<?php

namespace App\Http\Controllers\Dashboard\Product\Category;

use App\Helpers\Components;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
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
            'sidebar' => Components::SideBar('dashboard/categories', UserHelper::getType()->code),
            'navbar' => Components::Navbar(),
            'datatable' => Components::createDatatable("categories", $cols),
        ];

        return view('dashboard.categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        //
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
