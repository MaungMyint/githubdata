<?php

namespace App\Http\Controllers\backend;

use App\Shop;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops=Shop::all();
        $categories=Category::all();
        //dd($shops);

        return view('backend.shop.read',compact('shops','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        //dd($categories);
         return view('backend.shop.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $request->validate([
            'category' => 'required',
            'oname' => 'required',
            'ophoneno' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg|max:5000',
            'odate' => 'required',
            'otime' => 'required', 
        ]);

         if($request->hasfile('image'))
     {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image ->move(public_path().'/image/',$name);
        $photo = '/image/'.$name;
     }
        Shop::create([
            'name'=>request('oname'),
            'image'=>$photo,
            'category_id'=>request('category'),
            'phone'=>request('ophoneno'),
            'open'=>request('otime'),
            'close'=>request('close'),
            'odate'=>request('odate'),

        ]);
        return redirect()->route('admin.shop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         $categories=Category::find($id);
        $shops=Shop::find($id);
        return view('backend.shop.index',compact('shops','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shops=Shop::find($id);
        //$categories=Category::all();
        return view('backend.shop.edit',compact('shops'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        if($request->hasfile('image')){
            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $image='/image/'.$name;
        }
        else {
            $image=request('oldimage');
        }
        $shops=Shop::find($id);
        $shops->name=request('ename');   
        $shops->image=$image;   
        $shops->phone=request('ephone');   
        $shops->open=request('eopen');   
        $shops->close=request('eclose');   
        $shops->odate=request('edate');   
        $shops->category_id=request('ecategory');   
        $shops->save();
        return redirect()->route('admin.shop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shops=Shop::find($id);   
        $shops->delete();
        return redirect()->route('admin.shop.index');
    }
}
