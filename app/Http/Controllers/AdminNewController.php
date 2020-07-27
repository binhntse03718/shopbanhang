<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Model\News;

class AdminNewController extends Controller
{
    public function listNew() {
        $new = News::all();
        return view('layout_admin.New.listNew', ['new' => $new]);
    }

    public function get_addNew() {
        return view('layout_admin.New.addNew');
    }

    public function post_addNew() {
        $rule = [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ];

        $messages = [
            'title.required' => 'Title không được để trống',
            'content.required' => 'Title không được để trống',
            'image.required' => 'Title không được để trống',
        ];

        $validator = Validator::make($request->all, $rule, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $new = new News;
        $new -> title = $request -> title;
        $new -> content = $new -> content;
        $new -> image = $new -> image;

        $new -> save();

        return redirect('admin/new/addNew')->with('success', 'Thêm New thành công');
    }
}
