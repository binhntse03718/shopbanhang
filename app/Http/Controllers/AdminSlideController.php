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

    public function addSide() {

    }

    public function changeSide() {

    }
}
