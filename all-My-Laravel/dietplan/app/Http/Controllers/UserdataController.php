<?php

namespace App\Http\Controllers;

use App\Userdata;
Use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Userdata::all();
        return view('userdata.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userdata.create');
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
                'age'=>'required',
                'height'=>'required',
                'weight'=>'required',
                ]);
        Userdata::create([
            'age'=>request('age'),
            'height'=>request('height'),
            'weight'=>request('weight'),
             ]);

        return redirect()->route('userdata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function show(Userdata $userdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Userdata $userdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userdata $userdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userdata  $userdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userdata $userdata)
    {
        //
    }
}
