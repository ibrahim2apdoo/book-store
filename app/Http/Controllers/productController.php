<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=product::all();
        return view('product.index',compact('product'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Add New product';
        $category=category::all();
        return view('product.create',compact('category','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //if ($request->has(\request()->category_id)){
        $data=$this->validate(\request(),[
            'product_name'           =>'required|string',
            'product_image'          =>'required|image',
            'product_description'    =>'required|string',
            'product_price'          =>'required|integer',
            'product_quantity'       =>'required|integer',
        ],[],[
            'product_name'          =>'product name',
            'product_image'         =>'product image',
            'product_description'   =>'product description',
            'product_price'         =>'product price',
            'product_quantity'      =>'product quantity',
        ]);
        $data['category_id']=$request->category_id;
//return dd($data);
        if (\request()->hasFile('product_image')){
            $data['product_image']= (new Upload)->upload([
                'file'=>'product_image',
                'path'=>'product',
                'upload_type'=>'single',
                'delete_file'=>\App\product::orderBy('id','desc')->first(),

            ]);
        }
        //return dd($data);
        product::create($data);
        session()->flash('success','category Added successful');
        return redirect(url('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=product::find($id);
        $category=category::all();
        $title='Edit product';
        return view('product.edit',compact('product','category','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$this->validate(\request(),[
            'product_name'           =>'required|string',
            'product_image'          =>'image',
            'product_description'    =>'required|string',
            'product_price'          =>'required|integer',
            'product_quantity'       =>'required|integer',
        ],[],[
            'product_name'          =>'product name',
            'product_image'         =>'product image',
            'product_description'   =>'product description',
            'product_price'         =>'product price',
            'product_quantity'      =>'product quantity',
        ]);
        $data['category_id']=$request->category_id;
        if (\request()->hasFile('product_image')){
            $data['product_image']= (new Upload)->upload([
                'file'=>'product_image',
                'path'=>'product',
                'upload_type'=>'single',
                'delete_file'=>product::find($id)->product_image,

            ]);
        }
        //return dd($data);
        product::where('id',$id)->update($data);
        session()->flash('success','category Edit successful');
        return redirect(url('product'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= product::find($id);
        Storage::delete($product->product_image);
        $product->delete();
        session()->flash('success','product deleted successful');
        return redirect(url('product'));
    }
}
