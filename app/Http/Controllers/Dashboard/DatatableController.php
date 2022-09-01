<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatatableController extends Controller
{
    public function usersTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('users')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->status == 1 ? 'Aktif' : 'Pasif';
                })
                ->addColumn('actions', function ($row) {
                    $btn = "<a href='/dashboard/users/". $row->user_id ."/edit' class='edit btn btn-primary btn-sm'>Düzenle</a>";
                    $btn .= "<form action='/dashboard/users/". $row->user_id ."/delete' method='post' class='delete'>
                                    <input type='hidden' name='_method' value='delete'>
                                    <input type='hidden' name='_token' value='" . csrf_token() . "'>
                                    <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                                </form>";
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }

    public function typesTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('user_types')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->status == 1 ? 'Aktif' : 'Pasif';
                })
                ->addColumn('actions', function ($row) {
                    $btn = "<a href='/dashboard/users/types/". $row->type_id ."/edit' class='edit btn btn-primary btn-sm'>Düzenle</a>";
                    $btn .= "<form action='/dashboard/users/types/". $row->type_id ."/delete' method='post' class='delete'>
                                    <input type='hidden' name='_method' value='delete'>
                                    <input type='hidden' name='_token' value='" . csrf_token() . "'>
                                    <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                                </form>";
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }

    /**
     * @throws \Exception
     */
    public function servicesTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('services')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->status == 1 ? 'Aktif' : 'Pasif';
                })
                ->addColumn('actions', function ($row) {
                    $btn = "<a href='/dashboard/users/services/".$row->service_id."/edit' class='edit btn btn-primary btn-sm'>Düzenle</a>";
                    $btn .= "<form action='/dashboard/users/services/".$row->service_id."/delete' method='post' class='delete'>
                                    <input type='hidden' name='_method' value='delete'>
                                    <input type='hidden' name='_token' value='" . csrf_token() . "'>
                                    <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                                </form>";
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }

    public function productsTable(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->format('d/m/Y');
                })
                ->addColumn('updated_at', function ($row) {
                    return $row->updated_at->format('d/m/Y');
                })
                ->addColumn('actions', function ($row) {
                    $btn = "<a href='/dashboard/products/".$row->product_id."/edit' class='edit btn btn-primary btn-sm'>Düzenle</a>";
                    $btn .= "<form action='/dashboard/products/".$row->product_id."/delete' method='post' class='delete'>
                                    <input type='hidden' name='_method' value='delete'>
                                    <input type='hidden' name='_token' value='" . csrf_token() . "'>
                                    <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                                </form>";
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }
}
