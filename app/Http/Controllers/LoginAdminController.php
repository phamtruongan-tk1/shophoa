<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginAdminController extends Controller
{
    public function loginAdmin()
    {
        return view('admin.login');
    }

    public function postLoginAdmin (Request $request)
    {
        $admin = [
            'name' => $request->name,
            'password' => $request->password,
            'level' => 1
        ];

        if (Auth::attempt($admin)) {
            return Redirect::route('dashboard');
        } else {
            session()->put('message', 'Thông tin đăng nhập không chính xác');
            return Redirect::route('getLoginAdmin');
        }
    }
}
