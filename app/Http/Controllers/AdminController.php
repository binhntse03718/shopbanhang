<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Admin;

class AdminController extends Controller
{
    public function getLogin() {
        $admin = Admin::find(1);
        return view('layout_admin.login');
    }

    public function postLogin(Request $request) {
        $username = $request -> username;
		$password = $request -> password;

		if( Auth::attempt(['username' => $username, 'password' =>$password])) {
            dd('1');
		} else {
			dd('2');
		}
    }
}
