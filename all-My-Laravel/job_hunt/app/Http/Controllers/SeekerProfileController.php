<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Seekerinfo;


class SeekerProfileController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $seekerinfo = Seekerinfo::all();
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
        // dd($id);
        $user = User::find($id);

        // $employeeinfo = Employeeinfo::find($id);
        // dd($employeeinfo);
        return view('seekerprofile.editseeker',compact('user'));
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
        // dd($request);

        /*$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            //'your_picture' => 'sometimes|required|mimes:jpeg,jpg,png',
        ]);*/


        // Upolod profile
        if($request->hasfile('your_picture')){
            $photo = $request->file('your_picture');
            $name = $photo->getClientOriginalName();
            $photo->move(public_path().'/storage/image/',$name);
            $profile = '/storage/image/'.$name;
        }else{
            $profile = request('oldprofile');
        }
        //upload CV
        if($request->hasfile('your_cv')){
            $cv= $request->file('your_cv');
            $name = $cv->getClientOriginalName();
            $cv->move(public_path().'/storage/CV/',$name);
            $cvform = '/storage/CV/'.$name;
        }else{
            $cvform = request('oldcv');
        }


        // $user_id=Auth()->id();
        // $user = User::where($id,$user_id)->get();
        $user=User::find(Auth()->id());
        $seekerinfo = Seekerinfo::find($id);

        $user->name = request('name');
        $user->email = request('email');

        $seekerinfo->phoneno = request('phoneno');
        $seekerinfo->address = request('address');
        $seekerinfo->detail = request('detail');

        $seekerinfo->image = $profile;


        $seekerinfo->cvform = $cvform;
        
        $seekerinfo->save();
        $user->save();
        return redirect('/');
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