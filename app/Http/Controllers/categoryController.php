<?php

namespace App\Http\Controllers;

use App\About_Us;
use App\category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class categoryController extends Controller
{

    public function index()
    {
        $category=category::all();
        $title=trans('admin.categories');
        return view('admin.category.index',compact('category','title'));
    }


    public function create()
    {
        $title=trans('admin.category_add');
        return view('admin.category.create',compact('title'));
    }


    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $data['added_by']=auth()->user()->id;
        if (\request()->hasFile('category_image')){
            $data['category_image']= (new Upload)->upload([
                'file'=>'category_image',
                'path'=>'category',
                'delete_file'=>\App\category::orderBy('id','desc')->first(),

            ]);
        }
        category::create($data);
        session()->flash('success','category Added successful');
        return redirect(url('category'));

    }


    public function show($id)
    {
        $categoryinfo=category::find($id);
        return view('admin.category.show' ,compact('categoryinfo'));
    }

    public function show_product($id)
    {
        $about=About_Us::all();
        $categoryinfo=category::find($id);
        return view('website.show' ,compact('categoryinfo','about'));
    }
    public function add_product(ProductRequest $request , $category_id)
    {
        $data=$request->all();
        $data['category_id']=$category_id;

        if (\request()->hasFile('product_image')){
            $data['product_image']= (new Upload)->upload([
                'file'=>'product_image',
                'path'=>'product',
                'delete_file'=>\App\product::orderBy('id','desc')->first(),

            ]);
        }
        product::create($data);
        session()->flash('success','category Added successful');
        return back();
    }

    // function get edit view

    public function edit($id)
    {
        $category=category::find($id);
        $title='Edit Category';
        return view('admin.category.edit',compact('category','title'));
    }

    /*
         * update category
    */
    /**
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'category_name'          => 'required|string',
            'category_image'         => 'image',
            'category_description'   => 'required|string',
        ]);
      //  $data=$request->except('_method', '_token');
        $data['added_by']=auth()->user()->id;
        if ($request->hasFile('category_image')){
            $data['category_image']= (new Upload)->upload([
                'file'=>'category_image',
                'path'=>'category',
                'delete_file'=>category::find($id)->category_image,

            ]);
        }
        category::where('id',$id)->update($data);
        session()->flash('success','category Edit successful');
        return redirect(url('category'));

    }

    /*
     * delete product and it's image
     * */
    public function destroy($id)
    {
        $categories= category::find($id);
        Storage::delete($categories->category_image);
        $categories->delete();
        session()->flash('success','category deleted successful');
        return redirect(url('category'));
    }
}
