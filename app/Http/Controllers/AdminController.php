<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Admin;

class AdminController extends Controller
{
    public function getLogin() {
        return view('layout_admin.login');
    }

    public function postLogin(Request $request) {
        $username = $request->input('username');
		$password = $request->input('password');

		if( Auth::attempt(['username' => $username, 'password' =>$password])) {
			// Kiểm tra đúng email và mật khẩu sẽ chuyển trang
            // return redirect('hocsinh');
            dd('1');
		} else {
			dd('2');
		}
    }
}
