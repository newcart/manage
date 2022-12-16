<?php

namespace App\Http\Controllers\Dashboard\User\Service;

use App\Helpers\Components;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\ServiceRequest;
use App\Models\User\Service;
use App\Models\User\User;
use App\Models\User\UserType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ServiceController extends Controller
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
        $this->class = General::getClass();
        $this->method = General::getMethod();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|RedirectResponse|View
     */
    public function index(): View|Factory|RedirectResponse|Application
    {
        $cols = [
            'service_id' => 'ID',
            'code' => 'Kod',
            'name' => 'Ad',
            'status' => 'Durum',
            'created_at' => 'Oluşturma Tarihi',
            'updated_at' => 'Güncelleme Tarihi',
        ];
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components\DashboardComponents::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components\DashboardComponents::Navbar(),
                'datatable' => Components\DatatableComponent::createDatatable( "users/services", $cols)
            ];
            return view('dashboard.users.service.index', $data);
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|RedirectResponse
     */
    public function create(): View|Factory|RedirectResponse|Application
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components\DashboardComponents::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components\DashboardComponents::Navbar()
            ];
            return view('dashboard.users.service.create', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   ServiceRequest $request
     * @return  RedirectResponse
     */
    public function store(ServiceRequest $request): RedirectResponse
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $validated = $request->validated();
            $user_type = Service::create([
                'code' => $validated['code'],
                'name' => $validated['name'],
                'status' => $validated['status'] ? 1 : 0
            ]);

            if ($user_type) {
                notify()->success('Kullanıcı tipi başarıyla oluşturuldu.', 'Başarılı');
                return redirect()->route('dashboard.users.services');
            } else {
                notify()->error('Kullanıcı tipi oluşturulurken bir hata oluştu.', 'Hata');
                return redirect()->back();
            }
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Service $service
     * @return View|Factory|RedirectResponse|Application
     */
    public function edit(Service $service): View|Factory|RedirectResponse|Application
    {

        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components\DashboardComponents::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components\DashboardComponents::Navbar(),
                'service' => Service::findOrFail($service->service_id)
            ];
            return view('dashboard.users.service.edit', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param   ServiceRequest      $request
     * @param   Service             $service
     * @return  RedirectResponse
     */
    public function update(ServiceRequest $request, Service $service): RedirectResponse
    {
        if (User::thisUserHasPermission($this->method, $this->class))
        {
            $updatedService = Service::findOrFail($service->service_id)->update($request->validated());
            if ($updatedService) {
                notify()->success('Kullanıcı tipi başarıyla güncellendi.', 'Başarılı');
                return redirect()->route('dashboard.users.services');
            } else {
                notify()->error('Kullanıcı tipi güncelleme sırasında bir hata oluştu.', 'Hata');
                return redirect()->back();
            }
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Service $service
     * @return RedirectResponse
     */
    public function destroy(Service $service): RedirectResponse
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $service->delete();
            notify()->success('Kullanıcı tipi başarıyla silindi.', 'Başarılı');
            return redirect()->route('dashboard.users.services');
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }
}
