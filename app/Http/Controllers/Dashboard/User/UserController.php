<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Helpers\Components;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
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
    public function index(): View|Factory|RedirectResponse|Application
    {
        $cols = [
            'user_id' => 'No',
            'name' => 'Username',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'gsm' => 'GSM',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'datatable' => Components::createDatatable('http://127.0.0.1:8000/dashboard/users/table', $cols)
            ];
            return view('dashboard.users.index', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Displays the form for creating a new user.
     * @return Factory|Application|View|RedirectResponse
     */
    public function create(): View|Factory|RedirectResponse|Application
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'roles' => User::getRoles()
            ];
            return view('dashboard.users.create', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Displays the form for editing the specified user.
     * @param $id
     * @return Factory|Application|View|RedirectResponse
     */
    public function edit($id): View|Factory|RedirectResponse|Application
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'user' => User::find($id),
                'roles' => User::getRoles()
            ];
            return view('dashboard.users.edit', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Displays the form for editing the specified user.
     * @param $id
     * @return Factory|Application|View|RedirectResponse
     */
    public function show($id): View|Factory|RedirectResponse|Application
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'user' => User::find($id),
                'roles' => User::getRoles()
            ];
            return view('dashboard.users.show', $data);
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Displays the form for editing the specified user.
     * @param $id
     * @return Factory|Application|View|RedirectResponse
     */
    public function update($id): View|Factory|RedirectResponse|Application
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $user = User::find($id);
            $user->update([
                'name' => request('name'),
                'firstname' => request('firstname'),
                'lastname' => request('lastname'),
                'email' => request('email'),
                'gsm' => request('gsm'),
                'status' => request('status'),
                'role_id' => request('role_id')
            ]);
            notify()->success('Kullanıcı başarıyla güncellendi.', 'Başarılı');
            return redirect()->back();
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Displays the form for editing the specified user.
     * @param $id
     * @return Factory|Application|View|RedirectResponse
     */
    public function destroy($id): View|Factory|RedirectResponse|Application
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $user = User::find($id);
            $user->delete();
            notify()->success('Kullanıcı başarıyla silindi.', 'Başarılı');
            return redirect()->back();
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Displays the form for editing the specified user.
     * @param $id
     * @return Factory|Application|View|RedirectResponse
     */
    public function store(): View|Factory|RedirectResponse|Application
    {
        if (User::thisUserHasPermission($this->method, $this->class)) {
            $user = User::create([
                'name' => request('name'),
                'firstname' => request('firstname'),
                'lastname' => request('lastname'),
                'email' => request('email'),
                'gsm' => request('gsm'),
                'status' => request('status'),
                'role_id' => request('role_id')
            ]);
            notify()->success('Kullanıcı başarıyla eklendi.', 'Başarılı');
            return redirect()->back();
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }
}
