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

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packages=Package::all();
        return view('backend.package.read',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $packages=Package::all();
        return view('backend.package.create',compact('packages'));
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

        // $request->hasfile('image');
        //     $image=$request->file('image');
        //     $name=$image->getClientOriginalName();
        //     $image->move(public_path().'/images/',$name);
        //     $image='/images/'.$name;
        

           $request->hasfile('image');
            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/images/',$name);
            $image='/images/'.$name;

        Package::create([
            'name'=>request('pname'),
            'image'=>$image,
            'organizer_id'=>request('organizer'),
            'service_id'=>request('service'),
            'venues_id'=>request('venues'),
            'category_id'=>request('category'),
            
            'price'=>request('pprice'),
        ]);
        return redirect()->route('admin.package.index');
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
         $packages=Package::find($id);

        return view('backend.package.edit',compact('packages'));
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
        $packages=Package::find($id);
        $packages->name=request('pname');
        $packages->image=$image;
        $packages->organizer_id=request('organizer');
        $packages->service_id=request('service');
        $packages->venues_id=request('venue');
        $packages->category_id=request('category');
        $packages->price=request('pprice');
        $packages->update();
        return redirect()->route('admin.package.index');
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
          $packages=Package::find($id);
        $packages->delete();
        return redirect()->route('admin.package.index');
    }
}
