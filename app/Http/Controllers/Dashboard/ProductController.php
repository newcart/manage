<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Components;
use App\Helpers\General;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use UserHelper;

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
     */
    public function index()
    {
        $cols = [
            'product_id' => 'No',
            'code' => 'Code',
            'name' => 'Name',
            'brand' => 'Brand',
            'tax' => 'Tax',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components::SideBar('dashboard/products', 'admin'),
                'navbar' => Components::Navbar(),
                'datatable' => Components::createDatatable('http://127.0.0.1:8000/dashboard/products/table', $cols)
            ];
            return view('dashboard.products.index', $data);
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Displays form to create new product.
     *
     */
    public function create()
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components::SideBar('dashboard', 'admin'),
                'navbar' => Components::Navbar(),
            ];
            return view('dashboard.products.create', $data);
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Stores new product in database.
     *
     * @param Request $request
     */
    public function store(Request $request)
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
     * @param Product $product
     */
    public function edit(Product $product)
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components::SideBar('dashboard', 'admin'),
                'navbar' => Components::Navbar(),
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
     * @param Request $request
     */
    public function update(Request $request)
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
     * @param Product $product
     */
    public function destroy(Product $product)
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
