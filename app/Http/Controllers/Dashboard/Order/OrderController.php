<?php

namespace App\Http\Controllers\Dashboard\Order;

use App\Helpers\Components\DashboardComponents;
use App\Helpers\Components\DatatableComponent;
use App\Helpers\Components\OrderComponents;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order\Order;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {

        $cols = [
            'order_id' => 'No',
            'user_id' => 'User',
            'product_id' => 'Product',
            'quantity' => 'Quantity',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];

        $data = [
            'sidebar' => DashboardComponents::SideBar('dashboard/orders', UserHelper::getType()->code),
            'navbar' => DashboardComponents::Navbar(),
            'datatable' => DatatableComponent::createDatatable("orders", $cols),
            'topSelectors' => OrderComponents::TopSelectors(),
            'marketplaceOrders' => OrderComponents::MarketplaceOrders(),
        ];
        return view('dashboard.orders.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $data = [
            'sidebar' => DashboardComponents::SideBar('dashboard/orders', UserHelper::getType()->code),
            'navbar' => DashboardComponents::Navbar(),
        ];
        return view('dashboard.orders.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreOrderRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateOrderRequest $request
     * @param \App\Models\Order\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
