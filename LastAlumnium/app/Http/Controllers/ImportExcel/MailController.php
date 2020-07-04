<?php

namespace App\Http\Controllers\ImportExcel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Mail;
use App\Contact;
use Maatwebsite\Excel\Concerns\ToArray;
use PhpParser\Node\Expr\AssignOp\Concat;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 
    // foreach($datas as $d){
            public function email() {
                   
                    $user=DB::table('contacts')->select('name','gmail','password')->get();

                    // $mymail =Contact::pluck('gmail')->toArray();

                    

                 foreach($user as $us)
              
                    Mail::send('mail', ['user'=>$us], function ($message) use ($us) {
                        $message->to($us->gmail)->subject('Welcome to MS it ');
                        $message->from('charlixesai@gmail.com', 'MS IT Online Class');
                    });
                
        
                $students = Contact::latest()->paginate(12);
                return view('data.studentaccount',compact('students'))
                ->with((request()->input('page', 1) - 1) * 12);
             }

    public function index()
    {
        //
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
