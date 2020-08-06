<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slide;

class HomeController extends Controller
{
    public function getHome() {
        $slide = Slide::all();
        return view('layout_user.home', ['slide' => $slide]);
    }
}
