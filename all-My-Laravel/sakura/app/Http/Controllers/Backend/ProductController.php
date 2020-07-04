<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $products = Product::all();
         $categories = Category::all();



        return view('admin.product.read',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         $categories = Category::all();

          

        return view('admin.product.create',compact('categories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validation
          $request->validate([
          'product_name' => 'required|min:10|max:191',
          'price'  => 'required|min:10|',
          'image' => 'required',
          'category' => 'required',
          'product_desc' =>'required|min:10|max:191']);
          // $request->validate([
          //   'product_name' => 'required|min:10|max:191',
          //   'price'  => 'required|min:10|',
          //   'image' => 'required',
          //   'category' => 'required',
          //   'product_desc' =>'required|min:10|max:191']);

        //Upload Files
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path().'/image',$name);
            $image = '/image/'.$name;
        }


        //Data Insert


        Product::create([
            'product_name' => request('product_name'),
            'price'  => request('price'),
            'image' => $image,
            'category_id' => request('category'),
            'product_desc' => request('product_desc'),
            
        ]);

        return redirect()->route('product.index');
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
        //
        $products = Product::find($id);
        $categories = Category::all();
         return view('admin.product.edit',compact('products','categories'));
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
        //
         // $request->validate([
         //    'product_name' => 'required|min:10|max:191',
         //    'price'  => 'required|min:10|',
         //    'image' => 'required',
         //    'category' => 'required',
         //    'product_desc' =>'required|min:10|max:191']);

        //Upload Files
          if($request->hasfile('image')){
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->move(public_path().'/image',$name);
            $image = '/image/'.$name;
        }

        //
        $post = Product::find($id);
        $post->product_name = request('product_name');
        $post->price = request('price');
        $image = request('oldimg');
        $post->image = $image;
        $post->category_id = request('category');
        $post->product_desc = request('product_desc');
       
        $post->save();

        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
