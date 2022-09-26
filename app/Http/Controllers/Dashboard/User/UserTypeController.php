<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Helpers\Components;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserTypeRequest;
use App\Models\Role;
use App\Models\Service;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class UserTypeController extends Controller
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
     * Displays all users using DataTables.
     * @return Factory|Application|View|RedirectResponse
     */
    public function index(): Factory|Application|View|RedirectResponse
    {
        $cols = [
            'type_id' => 'No',
            'code' => 'Code',
            'name' => 'Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];

        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'datatable' => Components::createDatatable( "users/types", $cols),
            ];
            return view('dashboard.users.type.index', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return View|Factory|RedirectResponse|Application
     */
    public function create(): View|Factory|RedirectResponse|Application
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'services' => Service::all()
            ];
            return view('dashboard.users.type.create', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserTypeRequest $request
     * @return RedirectResponse
     */
    public function store(UserTypeRequest $request): RedirectResponse
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $val = $request->validated();
            $userType = UserType::create([
                'code' => $val['code'],
                'name' => $val['name'],
                'status' => $val['status'],
            ]);

            $usertp = UserType::where('code', $val['code'])->first();
            foreach ($val['services'] as $service => $method) {
                $serviceId = Service::where('code', $service)->first()->service_id;
                $role = [
                    'user_type_id' => $usertp->type_id,
                    'service_id' => $serviceId,
                    'status' => 1
                ];
                foreach ($method as $key => $value) {
                    $role["can_$key"] = $value;
                }
                Role::create($role);
            }

            if ($userType) {
                notify()->success('Kullanıcı tipi başarıyla oluşturuldu.', 'Başarılı');
                return redirect()->route('panel.users.types.index');
            } else {
                notify()->error('Kullanıcı tipi oluşturulurken bir hata oluştu.', 'Hata');
                return redirect()->back();
            }

        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
        }
        return redirect()->route('panel.users.types');
    }

    /**
     * Returns a view to edit a user type.
     * @param UserType $type
     * @return View|Factory|RedirectResponse|Application
     */
    public function edit(UserType $type): View|Factory|RedirectResponse|Application
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $services = Service::all();
            $roles = [];
            $rols = Role::where('user_type_id', $type->type_id)->get();
            foreach ($rols as $role) {
                $serviceCode = Service::where('service_id', $role->service_id)->first()->code;
                $roles[$serviceCode] = [
                    'create' => $role->can_create,
                    'view' => $role->can_view,
                    'update' => $role->can_update,
                    'delete' => $role->can_delete,
                ];
            }
            $emptyRoles = [];
            foreach ($services as $service) {
                if (!isset($roles[$service->code])) {
                    $emptyRoles[$service->code] = [
                        'create' => 0,
                        'view' => 0,
                        'update' => 0,
                        'delete' => 0,
                    ];
                }
            }

            if (count($roles) > 0) {
                $roles = array_merge($roles, $emptyRoles);
            } else {
                $roles = $emptyRoles;
            }

            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'type' => UserType::findOrFail($type->type_id),
                'services' => Service::all(),
                'roles' => $roles
            ];
            return view('dashboard.users.type.edit', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Updates the user type.
     * @param UserTypeRequest $request
     * @param UserType $type
     * @return RedirectResponse
     */
    public function update(UserTypeRequest $request, UserType $type): RedirectResponse
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $val = $request->validated();
            $updatedType = UserType::findOrFail($type->type_id)->update([
                'code' => $val['code'],
                'name' => $val['name'],
                'status' => $val['status'],
            ]);


            foreach ($val['services'] as $service => $method) {
                $serviceId = Service::where('code', $service)->first()->service_id;
                $role = [
                    'user_type_id' => $type->type_id,
                    'service_id' => $serviceId,
                    'status' => 1
                ];
                foreach ($method as $key => $value) {
                    $role["can_$key"] = $value;
                }
                Role::findOrFail($type->type_id)->update($role);
            }

            if ($updatedType) {
                notify()->success('Kullanıcı tipi başarıyla güncellendi.', 'Başarılı');
                return redirect()->route('panel.users.types');
            } else {
                notify()->error('Kullanıcı tipi güncellenirken bir hata oluştu.', 'Hata');
                return redirect()->back();
            }
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Deletes the user type from database.
     * @param UserType $type
     * @return RedirectResponse
     */
    public function destroy(UserType $type): RedirectResponse
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $type->delete();
            notify()->success('Ürün başarıyla silindi.', 'Başarılı');
            return redirect()->route('panel.users.types');
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

}
