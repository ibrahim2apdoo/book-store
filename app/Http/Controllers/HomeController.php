<?php

namespace App\Http\Controllers;

use App\About_Us;
use App\category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home(){
        $about=About_Us::all();
        $category=category::orderBy('id','desc')->paginate(3);
        //return dd($about);
        return view('website.index',compact('about','category'));
    }
    public function about_us(){
        $about=About_Us::all();
        return view('website.about_us',compact('about'));
    }
}
