<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function lang($lang){
        session()->has('lang')?session()->forget('lang'):'';
        $lang=='ar'? session()->put('lang','ar'): session()->put('lang','en');
        return back();
    }
}
