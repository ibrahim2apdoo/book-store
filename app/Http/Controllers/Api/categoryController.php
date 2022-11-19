<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class categoryController extends Controller
{
    public function all_category(){
        $category=category::withCount('products')->orderBy('id','desc')->paginate(3);
        return response(['category'=>$category]);
    }
    public function all_product_category($id){
    $category=category::find($id); //return category with

        //return 3 products without it's category in category in one page
    $product=$category->products()->paginate(3);
    return !empty($product) ? response(['status'=>true,compact('category','product')]) : response(['status'=>false]);
    }
    public function add_product(){

    }
}
