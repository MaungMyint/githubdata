<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Organizer;
use App\Service;
use App\Eventdetail;
use App\Event;
use App\Package;
use App\User;
use App\Venue;

class VenuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $venues=Venue::all();
         return view('backend.venue.read',compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $venues=Venue::all();
         return view('backend.venue.create',compact('venues'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



            $request->hasfile('image');
            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/images/',$name);
            $image='/images/'.$name;
    
        //
        Venue::create([
            'name'=>request('vname'),
            'image'=>$image,
            'amount'=>request('vamount'),
            'price'=>request('vprice'),
        ]);
        return redirect()->route('admin.venue.index');
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
        $venues=Venue::find($id);

        return view('backend.venue.edit',compact('venues'));
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

        if ($request->hasfile('image')){
            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/images/',$name);
            $image='/images/'.$name;
        }
        else
        {
             $image = request('oldimage');
        }
        $venues=Venue::find($id);
        $venues->name=request('vname');
        $venues->image=$image;
        $venues->amount=request('vamount');
        $venues->price=request('vprice');
        $venues->update();
        return redirect()->route('admin.venue.index');
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
        $venues=Venue::find($id);
        $venues->delete();
        return redirect()->route('admin.venue.index');
    }
}
