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

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizers=Organizer::all();
        return view('backend.organizer.read',compact('organizers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $organizers=Organizer::all();
        return view('backend.organizer.create',compact('organizers'));
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


        Organizer::create([
            'name'=>request('oname'),
            'address'=>request('oaddress'),
            'phoneno'=>request('ophoneno'),
            'description'=>request('odescription'),
            'email'=>request('oemail'),
            'image'=>$image,
            'category_id'=>request('category'),
        ]);
        return redirect()->route('admin.organizer.index');

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
        $organizers=Organizer::find($id);

        return view('backend.organizer.edit',compact('organizers'));
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
        $organizers=Organizer::find($id);
        $organizers->name=request('oname');
        $organizers->address=request('oaddress');
        $organizers->phoneno=request('ophoneno');
        $organizers->description=request('odescription');
        $organizers->email=request('oemail');
        $organizers->image=$image;
        $organizers->update();
        return redirect()->route('admin.organizer.index');
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
        $organizers=Organizer::find($id);
        $organizers->delete();
        return redirect()->route('admin.organizer.index');
    }
}
