<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Price;
use App\Product;
use  Illuminate\Pagination\Paginator;

class PriceController extends Controller
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
         
         $prices = Price::paginate(10);
         if($prices_id = request('prices_id')){
            $prices = Price::where('prices_id','prices_id')->paginate(10);
         }
        return view('admin.price.read',compact('prices','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::all();

          

        return view('admin.price.create',compact('products'));
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

        //Data Insert


        Price::create([
            'product_id' => request('product'),
            'price'  => request('price'),
            'qty' => request('qty'),
            
        ]);

        return redirect()->route('price.index');
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
         $prices = Price::find($id);
         $products = Product::all();
         return view('admin.price.edit',compact('prices','products'));
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
         $price = Price::find($id);
        $price->product_id = request('product');
        $price->price = request('price');
       
        $price->qty = request('qty');
        
        $price->save();

        return redirect()->route('price.index');
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
    }
}
