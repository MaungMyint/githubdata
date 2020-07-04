<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employeeinfo;


class EmployeeProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $employeeinfo = Employeeinfo::all();
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
        return view('employeeprofile.editemployee',compact('user'));
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
        // $user_id=Auth()->id();
        // $user = User::where($id,$user_id)->get();
        $user=User::find(Auth()->id());
        $employeeinfo = Employeeinfo::find($id);

        $user->name = request('name');
        $user->email = request('email');

        $employeeinfo->phoneno = request('phoneno');
        $employeeinfo->address = request('address');
        $employeeinfo->detail = request('detail');

        $employeeinfo->image = $profile;
        
        $employeeinfo->save();
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