<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employeeinfo;

class EmployeeinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employeeinfo');
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
         //  Validate

        $request->validate([

            
            'image' => 'required|mimes:jpeg,jpg,png',
            'phoneno' => 'required|min:3',
            'address' => 'required|min:10',
            'detail' => 'required|min:10',
            
        ]);

        //Upload files
        if ($request->hasfile('image')) {

            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image -> move(public_path().'/storage/image',$name);
            $image = '/storage/image/'.$name;
        }        

        // Store Data
        Employeeinfo::create([
            "user_id" => Auth()->id(),
            "image" => $image,
            "phoneno" => request('phoneno'),
            "address" => request('address'),
            "detail" => request('detail'),                    
            

    ]);
        return redirect('/job');

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
