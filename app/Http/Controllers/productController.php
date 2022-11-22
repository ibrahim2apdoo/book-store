<?php

namespace App\Http\Controllers;

use App\category;
use App\Http\Requests\ProductRequest;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class productController extends Controller
{

    public function index()
    {
        $product=product::all();
        return view('product.index',compact('product'));
    }


    public function create()
    {
        $title='Add New product';
        $category=category::all();
        return view('product.create',compact('category','title'));
    }


    public function store(ProductRequest $request)
    {
        if (!empty($request->category_id)&&$request->category_id!='disabled selected hidden') {
                $data=$request->all();
                $data['category_id'] = $request->category_id;
                if ($request->hasFile('product_image')) {
                    $data['product_image'] = (new Upload)->upload([
                        'file' => 'product_image',
                        'path' => 'product',
                        'delete_file' => \App\product::orderBy('id', 'desc')->first(),

                    ]);
                }
                product::create($data);
                session()->flash('success', 'product Added successful');
                return redirect(url('product'));
        }
        else return view('product.noProduct');
    }


    public function edit($id)
    {
        $product=product::find($id);
        $category=category::all();
        $title='Edit product';
        return view('product.edit',compact('product','category','title'));
    }

    /**
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate(\request(), [
            'product_name'          => 'required|string',
            'product_image'         => 'image',
            'product_description'   => 'required|string',
            'product_price'         => 'required|integer',
            'product_quantity'      => 'required|integer',
        ]);
        $data['category_id']=$request->category_id;
        if ($request->hasFile('product_image')){
            $data['product_image']= (new Upload)->upload([
                'file'=>'product_image',
                'path'=>'product',
                'upload_type'=>'single',
                'delete_file'=>product::find($id)->product_image,

            ]);
        }
        product::where('id',$id)->update($data);
        session()->flash('success','product Edit successful');
        return redirect(url('product'));

    }


    public function destroy($id)
    {
        $product= product::find($id);
        Storage::delete($product->product_image);
        $product->delete();
        session()->flash('success','product deleted successful');
        return redirect(url('product'));
    }
}
