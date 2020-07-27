<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slide;

class AdminSlideController extends Controller
{
    public function listSlide() {
        $slide = Slide::all();
        return view('layout_admin.Slide.listSlide', ['slide' => $slide]);
    }

    public function get_addSlide() {
        return view('layout_admin.Slide.addSlide');
    }

    public function post_addSlide() {
        $rule = [
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
}
