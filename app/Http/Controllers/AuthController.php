<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;

class AuthController extends Controller
{
    public function adminlogin(Request $request) {
         $arr = ['username' => $request->username,
             'password' => $request->password];
        if (Auth::guard('admins')->attempt($arr)){
            return view('dashboard');
        } else {
            dd('tài khoản và mật khẩu chưa chính xác');
        }
    }
}
