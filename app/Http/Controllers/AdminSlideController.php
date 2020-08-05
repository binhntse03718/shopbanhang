<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slide;
use Validator;

class AdminSlideController extends Controller
{
    public function listSlide5() {
        $slide = Slide::paginate(5);
        return view('layout_admin.Slide.listSlide', ['slide' => $slide]);
    }

    public function listSlide10() {
        $slide = Slide::paginate(10);
        return view('layout_admin.Slide.listSlide', ['slide' => $slide]);
    }

    public function get_addSlide() {
        return view('layout_admin.Slide.addSlide');
    }

    public function post_addSlide(Request $request) {
        $rules = [
            'image' => 'required'
        ];

        $messages = [
            'image.required' => 'Image không được để trống'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $slide = new Slide;
        $slide -> image = $request -> image;

        $slide -> save();

        return redirect('admin/slide/addSlide')->with('success','Thêm slide thành công');
    }

    public function get_changeSlide($id) {
        $slide = Slide::find($id);
        return view('layout_admin.Slide.changeSlide', ['slide' => $slide]);
    }

    public function post_changeSlide(Request $request, $id) {
        $slide = Slide::find($id);

        $rules = [
            'image' => 'required|unique:Slide'
        ];

        $messages = [
            'image.required' => 'Image không được để trống',
            'image.unique' => 'Image đã tồn tại'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $slide = new Slide;
        $slide -> image = $request -> image;

        $slide -> save();

        return redirect('admin/slide/changeSlide/'.$id)->with('success', 'Sửa slide thành công');
    }

    public function deleteSlide($id) {
        $slide = Slide::find($id);
        $slide->delete();

        return redirect('/admin/slide/listSlide')->with('success', 'Xóa slide thành công');
    }
}
