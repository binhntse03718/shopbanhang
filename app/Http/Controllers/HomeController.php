<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class HomeController extends Controller
{
    public function getHome() {
        $slide = Slide::all();
        dd($slide);
        exit;
        // return view('page.trangchu', ['slide'=>$slide]);
        return view('page.trangchu', compact('slide'));
    }

    public function getLoaiSp() {
        return view('page.loai_sanpham');
    }

    public function getChiTiet() {
        return view('page.chitiet_sanpham');
    }

    public function getLienHe() {
        return view('page.lienhe');
    }

    public function getGioiThieu() {
        return view('page.gioithieu');
    }
}
