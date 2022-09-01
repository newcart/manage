<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Helpers\Components;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\ServiceRequest;
use App\Models\Service;
use App\Models\User;
use App\Models\UserType;
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
            'service_id' => 'No',
            'code' => 'Code',
            'name' => 'Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
        if(User::userHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'datatable' => Components::createDatatable('http://127.0.0.1:8000/dashboard/users/services/table', $cols)
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
        if (User::userHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar()
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
        if (User::userHasPermission($this->method, $this->class)) {
            $validated = $request->validated();
            $user_type = UserType::create([
                'code' => $validated['code'],
                'name' => $validated['name'],
                'status' => $validated['status'] ? 1 : 0
            ]);

            if ($user_type) {
                notify()->success('Kullanıcı tipi başarıyla oluşturuldu.', 'Başarılı');
                return redirect()->route('panel.users.service');
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
        $type = UserType::findOrFail($service->service_id);

        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'type' => $type
            ];
            return view('dashboard.users.type.edit', $data);
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
                return redirect()->route('panel.users.service');
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
            return redirect()->route('panel.users.service');
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }
}
