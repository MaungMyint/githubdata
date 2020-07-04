<?php

namespace App\Http\Controllers;

use App\Buffay;
use App\Shop;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class BuffayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops=Shop::where('category_id',2)->get();
        return view('/frontend.buffay',compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buffay  $buffay
     * @return \Illuminate\Http\Response
     */
    public function show(Buffay $buffay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buffay  $buffay
     * @return \Illuminate\Http\Response
     */
    public function edit(Buffay $buffay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buffay  $buffay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buffay $buffay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buffay  $buffay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buffay $buffay)
    {
        //
    }
}
