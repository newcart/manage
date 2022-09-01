<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Helpers\Components;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRoleRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RoleController extends Controller
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
     * @return Factory|Application|View|RedirectResponse
     */
    public function index(): Factory|Application|View|RedirectResponse
    {
        $cols = [
            'role_id' => 'No',
            'user_type_id' => 'User Type',
            'service_type_id' => 'Service Type',
            'can_view' => 'Can View?',
            'can_create' => 'Can Create?',
            'can_update' => 'Can Update?',
            'can_delete' => 'Can Delete?',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];

        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'datatable' => Components::createDatatable(route('panel.users.roles.table'), $cols)
            ];
            return view('dashboard.users.role.index', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->route('panel.users.roles.index');
        }

    }

    /**
     * Show the for create a new resource.
     *
     * @return Factory|Application|View|RedirectResponse
     */
    public function create(): Factory|Application|View|RedirectResponse
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar()
            ];
            return view('dashboard.users.role.create', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->route('panel.users.roles.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRoleRequest $request
     * @return RedirectResponse
     */
    public function store(UserRoleRequest $request): RedirectResponse
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $role = Role::create($request->validated());
            if ($role) {
                notify()->success('Rol başarıyla oluşturuldu.', 'Başarılı');
            } else {
                notify()->error('Rol oluşturulurken bir hata oluştu.', 'Hata');
            }
            return redirect()->route('panel.users.roles');
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
        }
        return redirect()->route('panel.users.roles');
    }

    /**
     * Update the specified resource.
     *
     * @param UserRoleRequest $request
     * @param Role $role
     * @retur RedirectResponse
     */
    public function update(UserRoleRequest $request, Role $role): RedirectResponse
    {
        if(User::thisUserHasPermission($this->method, $this->class)) {
            $updatedRole = Role::findOrFail($role->role_id)->update($request->validated());
            if ($updatedRole) {
                notify()->success('Rol başarıyla güncellendi.', 'Başarılı');
            } else {
                notify()->error('Rol güncellenirken bir hata oluştu.', 'Hata');
            }
            return redirect()->route('panel.users.roles');
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
        }
        return redirect()->route('panel.users.roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return RedirectResponse
     */
    public function destroy(Role $role): RedirectResponse
    {
        if(User::thisUserHasPermission($this->method, $this->class)) {
            $role->delete();
            notify()->success('Rol başarıyla silindi.', 'Başarılı');
            return redirect()->route('panel.users.roles');
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
        }
        return redirect()->route('panel.users.roles');
    }
}
