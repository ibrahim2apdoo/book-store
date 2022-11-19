<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::all();
        return view('category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Add New Category';
        return view('category.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validate(\request(),[
            'category_name'           =>'required',
            'category_description'   =>'required',
            'category_image'         =>'required|image',
        ],[],[
            'category_name'          =>'category name',
            'category_description'   =>'category description',
            'category_image'         =>'category image',
        ]);
        $data['added_by']=auth()->user()->id;
        if (\request()->hasFile('category_image')){
            $data['category_image']= (new Upload)->upload([
                'file'=>'category_image',
                'path'=>'category',
                'upload_type'=>'single',
                'delete_file'=>\App\category::orderBy('id','desc')->first(),

            ]);
        }
        //return dd($data);
        category::create($data);
        session()->flash('success','category Added successful');
        return redirect(url('category'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoryinfo=category::find($id);
        return view('category.show' ,compact('categoryinfo'));
    }

    public function add_product($category_id)
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
        $data['category_id']=$category_id;

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
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=category::find($id);
        $title='Edit Category';
        return view('category.edit',compact('category','title'));
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
            'category_name'           =>'required',
            'category_description'   =>'required',
            'category_image'         =>'image',
        ],[],[
            'category_name'          =>'category name',
            'category_description'   =>'category description',
            'category_image'         =>'category image',
        ]);
        $data['added_by']=auth()->user()->id;
        if (\request()->hasFile('category_image')){
            $data['category_image']= (new Upload)->upload([
                'file'=>'category_image',
                'path'=>'category',
                'upload_type'=>'single',
                'delete_file'=>category::find($id)->category_image,

            ]);
        }
        category::where('id',$id)->update($data);
        session()->flash('success','category Edit successful');
        return redirect(url('category'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories= category::find($id);
        Storage::delete($categories->category_image);
        $categories->delete();
        session()->flash('success','category deleted successful');
        return redirect(url('category'));
    }
}
