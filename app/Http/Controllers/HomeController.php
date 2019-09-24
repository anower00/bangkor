<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\News;
use App\Slider;
use App\Statistics;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $sliders = Slider::all();
        $galleries = Gallery::all();
        $statistics = Statistics::all();
        $newses = News::all();

        return view('welcome', compact('sliders','galleries','statistics','newses'));
    }
}
