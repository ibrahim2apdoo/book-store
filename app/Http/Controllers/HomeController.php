<?php

namespace App\Http\Controllers;

use App\About_Us;
use App\category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $about=About_Us::all();
        $category=category::orderBy('id','desc')->paginate(3);
        return view('website.index',compact('about','category'));
    }
    public function about_us(){
        $about=About_Us::all();
        return view('website.about_us',compact('about'));
    }
}
