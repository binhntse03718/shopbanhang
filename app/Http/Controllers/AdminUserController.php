<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Valaditor;

class AdminUserController extends Controller
{
    public function listUser() {
        $user = User::all();
        return view('layout_admin.User.listUser', ['user' => $user]);
    }

    public function get_addUser() {
        return view('layout_admin.User.addUser');
    }

    public function post_addUser(Request $request) {

        $rules = [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'gender'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'name' => 'min:3|max:255',
            'email'=>'min:3|max:255',
            'password'=>'min:6|max:255',
            'gender'=>'min:2|max:255',
            'phone_number'=>'min:3|max:255',
            'address'=>'min:3|max:255',
            ];

        $messages = [
            'name.required'=>'Name không được để trống',
            'email.required'=>'Email không được để trống',
            'password.required'=>'Password không được để trống',
            'gender.required'=>'Gender không được để trống',
            'phone_number.required'=>'Phone Number không được để trống',
            'address.required'=>'Address không được để trống',
            'name.min' => 'Name tối thiểu từ 3 kí tự',
            'name.max' => 'Name tối đa 255 kí tự',
            'email.min' => 'Name tối thiểu từ 3 kí tự',
            'email.max' => 'Name tối đa 255 kí tự',
            'password.min' => 'Password tối thiểu từ 6 kí tự',
            'password.max' => 'Password tối đa 255 kí tự',
            'gender.min' => 'Gender tối thiểu từ 2 kí tự',
            'gender.max' => 'Gender tối đa 255 kí tự',
            'phone_number.min' => 'Phone number tối thiểu từ 9 kí tự',
            'phone_number.max' => 'Phone number tối đa 255 kí tự',
            'Address.min' => 'Address tối thiểu từ 3 kí tự',
            'Address.max' => 'Address tối đa 255 kí tự',
            ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $user = new User;
        $user -> name = $user -> name;
        $user -> email = $user -> email;
        $user -> password = $user -> password;
        $user -> gender = $user -> gender;
        $user -> phone_number = $user -> phone_number;
        $user -> address = $user -> address;

        $user -> save();

        return redirect('admin/user/addUser')->with('success', 'Thêm user thành công');
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();

        return redirect('/admin/user/listUser')-with('success', 'Xóa User thành công');
    }
}
