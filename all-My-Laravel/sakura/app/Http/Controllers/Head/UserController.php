<?php

namespace App\Http\Controllers\Head;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\User;
use App\UserDetail;
use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Member::all();
        $users = User::all();
         $user_details = UserDetail::where('head_id',Auth::user()->id)->get();
        return view('admin.user.read',compact('members','users','user_details'));

    }

    /**     
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('head.user.userform');
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
        $user = User::create([
            'name' => request('name'),
            'email'  => request('email'),
            'password' => request('password'),
            'access' => request('access'),
            
            
        ]);

        // $id = DB::table('users')->latest('id')->first();
       
       $member_id = uniqid();

       // dd($user);
      Member::create([
                          
            'head_id'=> '003',
            'member_id' => $member_id,
            'nrc'    => request('nrc'),
            'phone'  => request('phone'),
            'address'=> request('address'),
            'gender' => request('gender'),
            'user_id' => $user->id,
            
        ]);
      

        return redirect()->route('user.index');
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
        $member = Member::find($id);
        
         return view('head.user.edit',compact('member'));
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
        $member = Member::find($id);
        $user = User::find($member->user_id);


        $user->name = request('name');
        $user->email = request('email');
        $member->nrc = request('nrc');
       
        $member->phone = request('phone');
        $member->address = request('address');
       
        $member->save();
        $user->save();
        return redirect()->route('user.index');
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
        $member = Member::find($id);
        $user = User::find($member->user_id);
        $member->delete();
        $user->delete();
        return redirect()->route('user.index');
    }
}
