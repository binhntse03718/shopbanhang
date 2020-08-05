<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Model\News;
use Validator;

class AdminNewController extends Controller
{
    public function listNew5() {
        $new = News::paginate(5);
        return view('layout_admin.New.listNew', ['new' => $new]);
    }

    public function listNew10() {
        $new = News::paginate(10);
        return view('layout_admin.New.listNew', ['new' => $new]);
    }

    public function get_addNew() {
        return view('layout_admin.New.addNew');
    }

    public function post_addNew(Request $request) {

        $rules = [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ];

        $messages = [
            'title.required' => 'Title không được để trống',
            'content.required' => 'Title không được để trống',
            'image.required' => 'Title không được để trống',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $new = new News;
        $new -> title = $request -> title;
        $new -> content = $new -> content;
        $new -> image = $new -> image;

        $new -> save();

        return redirect('/admin/new/addNew')->with('success', 'Thêm New thành công');
    }

    public function get_changeNew($id) {
        $new = News::find($id);
        return view('layout_admin.New.changeNew', ['new' => $new]);
    }

    public function post_changeNew(Request $request, $id) {
        $new = News::find($id);

        $rules = [
            'title' => 'required|unique:News',
            'content' => 'required',
            'image' => 'required|unique:News'
        ];

        $messages = [
            'title.required' => 'Title không được để trống',
            'content.required' => 'Title không được để trống',
            'image.required' => 'Title không được để trống',
            'title.unique' => 'Title đã tồn tại',
            'image.unique' => 'Image đã tồn tại'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $new = new News;
        $new -> title = $request -> title;
        $new -> content = $new -> content;
        $new -> image = $new -> image;

        $new -> save();

        return redirect('/admin/new/changeNew')->with('success', 'Thay đổi New thành công');
    }

    public function deleteNew($id) {
        $new = News::find($id);
        $new->delete();

        return redirect('/admin/new/listNew')->with('success', 'Xóa New thành công');
    }
}
