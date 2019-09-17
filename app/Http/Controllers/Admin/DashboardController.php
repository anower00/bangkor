<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\News;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $sliderCount = Slider::count();
        $galleryCount = Gallery::count();
        $newsCount = News::count();

        return view('admin.dashboard',compact('sliderCount','galleryCount','newsCount'));
    }
}
