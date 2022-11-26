<?php

namespace App\Http\Controllers;

use App\About_Us;
use App\category;
use App\product;
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
        $product=product::all();
        return view('website.index',compact('about','category','product'));
    }
    public function about_us(){
        $about=About_Us::all();
        return view('website.about_us',compact('about'));
    }
}
