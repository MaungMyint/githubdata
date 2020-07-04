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

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $services=Service::all();
        return view('backend.service.read',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $services=Service::all();
        return view('backend.service.create',compact('services'));
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
  
            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/images/',$name);
            $image='/images/'.$name;

        Service::create([
            'name'=>request('sname'),
            'image'=>$image,
            'description'=>request('sdescription'),
            'price'=>request('sprice'),
            'organizer_id'=>request('organizer'),
        ]);
        return redirect()->route('admin.service.index');
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
          $services=Service::find($id);

        return view('backend.service.edit',compact('services'));
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

        $services=Service::find($id);
         $services->name=request('sname');
         $services->image=$image;
         $services->description=request('sdescription');
        $services->price=request('sprice');
        $services->organizer_id=request('organizer');
        $services->update();
        return redirect()->route('admin.service.index');
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
        $services=Service::find($id);
        $services->delete();
        return redirect()->route('admin.service.index');
    }
}
