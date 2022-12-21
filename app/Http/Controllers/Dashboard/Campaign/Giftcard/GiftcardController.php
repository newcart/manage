<?php

namespace App\Http\Controllers\Dashboard\Campaign\Giftcard;

use App\Helpers\Components\DashboardComponents;
use App\Helpers\Components\DatatableComponent;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\Campaign\Utils\Variables;
use App\Models\User\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GiftcardController extends Controller
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
        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır', 'Yetki Hatası');
            return redirect()->back();
        }

        $data = [
            'sidebar' => DashboardComponents::SideBar('dashboard/campaigns', UserHelper::getType()->code),
            'navbar' => DashboardComponents::Navbar(),
            'datatable' => DatatableComponent::createDatatable($this->class . "s", Variables::GiftcardColumns())
        ];

        return view('dashboard.campaign.giftcard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|RedirectResponse
     */
    public function create() : Application|Factory|View|RedirectResponse
    {
        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır', 'Yetki Hatası');
            return redirect()->back();
        }

        $data = [
            'sidebar' => DashboardComponents::SideBar('dashboard/campaigns', UserHelper::getType()->code),
            'navbar' => DashboardComponents::Navbar()
        ];

        return view('dashboard.campaign.giftcard.create', $data);
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
    public function edit($id) : Application|Factory|View|RedirectResponse
    {
        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır', 'Yetki Hatası');
            return redirect()->back();
        }

        $data = [
            'sidebar' => DashboardComponents::SideBar('dashboard/campaigns', UserHelper::getType()->code),
            'navbar' => DashboardComponents::Navbar()
        ];

        return view('dashboard.campaign.giftcard.edit', $data);
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
