<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discount;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts=Discount::all();
        return view('dis.discount',compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dis.adddiscount');
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
            'Icode_no' => 'required',
            'percent' => 'required',
        ]);   
        
        discount::create([
            'Item_codeno' => request('Icode_no'),
            'discount_percetnt' => request('percent'),
        ]);
        return redirect()->route('discount.index');
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
        $discount = discount::find($id);

        return view('dis.editdiscount',compact('discount'));
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
        
        $discount=Discount::find($id);
        $discount->Item_codeno=request('Icode_no');
        $discount->discount_percetnt=request('percent');
        $discount->save();
        return redirect()->route('discount.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $discount = Discount::find($id);
        $discount->delete();
        return redirect()->route('discount.index');

    }
}
