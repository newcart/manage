<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Gets user data from login form and attempts to log in
     * @param AuthRequest $request
     * @return RedirectResponse
     */
    public function login(AuthRequest $request)
    {
        $val = $request->validated();
        dd($val);

        if (Auth::attempt($val)) {
            $request->session()->regenerate();
            notify()->success('Giriş Yapıldı!', 'İşlem Başarılı');
            $user_type = DB::table('user_types')->where('type_id', Auth::user()->user_type_id)->first();
            $request->session()->put('user_type', $user_type);
            return redirect()->route('panel');
        } else {
            notify()->warning('Giriş Yapılamadı! Yanlış e-posta veya şifre.', 'İşlem Başarısız.');
            return redirect()->back();
        }
    }

//    public function register(Request $request)
//    {
//        $check = $request->validate([
//            'name' => 'required',
//            'email' => 'required|email',
//            'password' => 'required'
//        ]);
//
//        $user = User::create([
//            'name' => $check['name'],
//            'email' => $check['email'],
//            'password' => $check['password']
//        ]);
//
//        Auth::login($user);
//        return redirect()->route('panel');
//    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login');
    }

    public function type()
    {
        return UserHelper::getType();

    }
}
