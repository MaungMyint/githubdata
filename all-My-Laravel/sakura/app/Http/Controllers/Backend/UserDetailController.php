<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $users = User::All();
          $user_details = UserDetail::where('head_id',Auth::user()->id)->get();
         return view('admin.user.read',compact('user_details','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.user.userform');
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
        //validation
        $request->validate([
            'name' => 'required|min:10|max:191',
            'email'  => 'required|min:10|',
            'password' => 'required']);



        if(request('agent')){
            $role = 'agent';
        }
        else{
            $role = 'head';
        }
        $user = User::create([
            'name' => request('name'),
            'email'  => request('email'),
            'password' => Hash::make(request('password')),
            'role' => $role,
            
            
        ]);

        // $id = DB::table('users')->latest('id')->first();
       
       $head_id = uniqid();

       // dd($user);
      UserDetail::create([
                          
            'head_id'=> Auth::user()->id,
            'nrc'    => request('nrc'),
            'phone'  => request('phone'),
            'address'=> request('address'),
            'gender' => request('gender'),
            'user_id' => $user->id,
            
        ]);
      

        return redirect()->route('userdetail.index');
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
        $user_details = UserDetail::find($id);
        
         return view('admin.user.edit',compact('user_details'));
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
        $userdetail = UserDetail::find($id);
        $user = User::find($userdetail->user_id);


        $user->name = request('name');
        $user->email = request('email');
        $userdetail->nrc = request('nrc');
       
        $userdetail->phone = request('phone');
        $userdetail->address = request('address');
       
        $userdetail->save();
        $user->save();
        return redirect()->route('userdetail.index');
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
        $userdetail = UserDetail::find($id);
        $user = User::find($userdetail->user_id);
        $userdetail->delete();
        $user->delete();
        return redirect()->route('userdetail.index');
    }
}
