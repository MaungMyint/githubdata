<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class ImportExcelStudentProfileController extends Controller
{
    
    public function index()
    {
      $seekerinfo = User::all();
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {//
        // dd($id);
        $user = User::find($id);

     


        // $employeeinfo = Employeeinfo::find($id);
        // dd($employeeinfo);
        return view('layouts.edit',compact('user'));
}



public function update(Request $request, $id)
{
  if($request->hasfile('your_picture')){
    $image = $request->file('your_picture');
    $name = $image->getClientOriginalName();
    $image->move(public_path().'/image/',$name);
    $image = '/image/'.$name;
}else{
    $image = request('oldprofile');
}
  $user= User::find($id);
  $user->image=$image;
  $user->phonenumber = request('phone');
  $user->address = request('address');  
  $user->password = Hash::make(request('password'));
  $user->degree = request('degree');  
  $user->major = request('major');
  $user->training = request('training');  
  $user->course = request('course');
  $user->university = request('university');  
  $user->staff = request('job');
  $user->jobposition = request('position');  
  $user->joblocation = request('location');
  $user->slary = request('slary');  
  $user->pass = request('password');
  $user->state = request('division');  
  $user->status = 1 ;  

  $user->save();

 



  return redirect('/');

}

    public function destroy($id)
    {
        //
    }

}
