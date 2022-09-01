<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Helpers\Components;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserTypeRequest;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
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
     * @return Factory|Application|\Illuminate\Contracts\View\View|RedirectResponse
     */
    public function index(): Factory|Application|\Illuminate\Contracts\View\View|RedirectResponse
    {
        $cols = [
            'type_id' => 'No',
            'code' => 'Code',
            'name' => 'Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];

        if (User::userHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar(),
                'datatable' => Components::createDatatable(route('panel.users.types.table'), $cols)
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
     * @return \Illuminate\Contracts\View\View|Factory|RedirectResponse|Application
     */
    public function create(): \Illuminate\Contracts\View\View|Factory|RedirectResponse|Application
    {
        if (User::userHasPermission($this->method, $this->class)) {
            $data = [
                'sidebar' => Components::SideBar('dashboard/users', UserHelper::getType()->code),
                'navbar' => Components::Navbar()
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
        if (User::userHasPermission($this->method, $this->class)) {
            $user_type = UserType::create($request->validated());

            if ($user_type) {
                notify()->success('Kullanıcı tipi başarıyla oluşturuldu.', 'Başarılı');
            } else {
                notify()->error('Kullanıcı tipi oluşturulurken bir hata oluştu.', 'Hata');
            }
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
        }
        return redirect()->route('panel.users.types');
    }

    /**
     * Returns a view to edit a user type.
     * @param UserType $type
     * @return \Illuminate\Contracts\View\View|Factory|RedirectResponse|Application
     */
    public function edit(UserType $type): \Illuminate\Contracts\View\View|Factory|RedirectResponse|Application
    {
        $type = UserType::findOrFail($type->type_id);

        if (User::userHasPermission($this->method, $this->class)) {
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
     * Updates the user type.
     * @param UserTypeRequest $request
     * @param UserType $type
     * @return RedirectResponse
     */
    public function update(UserTypeRequest $request, UserType $type): RedirectResponse
    {
        if (User::userHasPermission($this->method, $this->class)) {
            $updatedType = UserType::findOrFail($type->type_id)->update($request->validated());
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
        if (User::userHasPermission($this->method, $this->class)) {
            $type->delete();
            notify()->success('Ürün başarıyla silindi.', 'Başarılı');
            return redirect()->route('panel.users.types');
        } else {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

}
