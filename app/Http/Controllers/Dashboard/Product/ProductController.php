<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Helpers\Components;
use App\Helpers\General;
use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\Product\Utils\Variables;
use App\Models\Product\Product;
use App\Models\User\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
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
     * Displays all products using DataTables.
     *
     * @return View|Factory|Application|RedirectResponse
     */
    public function index(): View|Factory|Application|RedirectResponse
    {

        if (!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }

        $data = [
            'sidebar' => Components\DashboardComponents::SideBar('dashboard/products', UserHelper::getType()->code),
            'navbar' => Components\DashboardComponents::Navbar(),
            'datatable' => Components\DatatableComponent::createDatatable( $this->class. "s", Variables::ProductColumns()),
            'options' => Variables::ProductOptions()
        ];
        return view('dashboard.products.index', $data);
    }

    /**
     * Displays form to create new product.
     *
     * @return View|Factory|RedirectResponse|Application
     */
    public function create(): View|Factory|RedirectResponse|Application
    {
        if(!User::thisUserHasPermission($this->method, $this->class))
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }

        $data = [
            'sidebar' => Components\DashboardComponents::SideBar('dashboard', UserHelper::getType()->code),
            'navbar' => Components\DashboardComponents::Navbar(),
        ];
        return view('dashboard.products.create', $data);
    }

    /**
     * Stores new product in database.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'price' => 'required',
                'brand' => 'required',
                'tax' => 'required',
            ]);
            $image = '[
                "https://images.unsplash.com/photo-1657299143322-934f44698807?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2574&q=80",
                "https://images.unsplash.com/photo-1657214059233-5626b35eb349?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2536&q=80",
                "https://images.unsplash.com/photo-1652210998083-428eaf01f6bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2564&q=80",
                "https://images.unsplash.com/photo-1661630803143-de2704595708?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2565&q=80"
            ]';
            $product = new Product();
            $product->code = $request->code;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->brand = $request->brand;
            $product->tax = $request->tax;
            $product->status = 1;
            $product->images = $image;
            $product->save();
            notify()->success('Ürün başarıyla eklendi.', 'Başarılı');
            return redirect()->route('dashboard.products.index');
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Displays form to edit product.
     *
     * @param Product $product
     * @return View|Factory|Application|RedirectResponse
     */
    public function edit(Product $product): View|Factory|RedirectResponse|Application
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components\DashboardComponents::SideBar('dashboard', UserHelper::getType()->code),
                'navbar' => Components\DashboardComponents::Navbar(),
                'product' => $product
            ];
            return view('dashboard.products.edit', $data);
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Updates product in database.
     *
     * @param Request $request
     * @return View|Factory|Application|RedirectResponse
     */
    public function update(Request $request): Factory|View|RedirectResponse|Application
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'price' => 'required',
                'brand' => 'required',
                'tax' => 'required',
                'status' => 'required',
            ]);
            $product = Product::find($request->id);
            $product->code = $request->code;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->brand = $request->brand;
            $product->tax = $request->tax;
            $product->status = $request->status;
            $product->save();
            notify()->success('Ürün başarıyla güncellendi.', 'Başarılı');
            return redirect()->route('dashboard.products.index');
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Deletes product from database.
     *
     * @param Product $product
     * @return View|Factory|Application|RedirectResponse
     */
    public function destroy(Product $product): Factory|View|RedirectResponse|Application
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $product->delete();
            notify()->success('Ürün başarıyla silindi.', 'Başarılı');
            return redirect()->route('dashboard.products.index');
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }
}
