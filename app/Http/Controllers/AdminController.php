<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Admin;

class AdminController extends Controller
{
    public function ViewResult() {
        return view('layout admin.login');
    }

    public function AdminLogin(Request $request) {

        $check = $request->only('username', 'password');

        if(Auth::attempt($check)) {
            return redirect('layout admin.dashboard');
        } else {
            return redirect('layout admin.login')->with(dd('Sai tên mật khẩu'));
        }
    }
}
