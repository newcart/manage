<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
    /**
     * Gets user data from login form and attempts to log in
     * @param AuthRequest $request
     * @return RedirectResponse
     * @routeName login.post
     */
    public function login(AuthRequest $request)
    {
        $val = $request->validated();
        if (Auth::attempt($val)) {
            $request->session()->regenerate();
            notify()->success('Giriş Yapıldı!', 'İşlem Başarılı');
            $user_type = DB::table('user_types')->where('type_id', Auth::user()->user_type_id)->first();
            $request->session()->put('user_type', $user_type);
            return redirect()->route('dashboard');
        } else {
            notify()->error('Giriş Yapılamadı! Yanlış e-posta veya şifre.', 'İşlem Başarısız.');
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

    /**
     * Clears the session and logs out the user
     * @return RedirectResponse
     * @routeName logout
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login');
    }
}
