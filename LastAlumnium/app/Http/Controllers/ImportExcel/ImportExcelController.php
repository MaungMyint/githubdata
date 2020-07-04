<?php
namespace App\Http\Controllers\ImportExcel;

use App\Contact;
use App\Console;
use App\Http\Controllers;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ImportContacts;
use App\User;
use Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\AssignOp\Concat;

class ImportExcelController extends Controller
{
    public function index()
    {


        $data=DB::table('contacts')->get();
     


       $generator="AB*D5wyz10";

       $users = DB::table('contacts')->where('password','password')->count();
       $da=DB::table('contacts')->where('password','password')->get();
      

    foreach($da as $d)

       DB::table('contacts')->where('id',$d->id)->update([
      
        'password'=>  str_shuffle($generator),
        
        
    ]);
       
       
    $stat=DB::table('contacts')->where('status','0')->get();

    foreach($stat as $st)

        DB::table('users')->insert([
            'cid'=>$st->id,
            'name'=>$st->name,
            'email'=>$st->gmail,
            'nrc'=>$st->nrc,
            'degree'=>$st->degree,
            'major'=>$st->major,
            'training'=>$st->training,
            'course'=>$st->course,    
            'phonenumber'=>$st->phonenumber,
            'address'=>$st->address,
            'pass'=>$st->password,
            "created_at"=> now(),
            "updated_at"=> now(),

            
            'password'=>Hash::make($st->password)
        ]);

        foreach($da as $d)

       DB::table('contacts')->where('id',$d->id)->update([
      
      'status'=>'1'
        
        
    ]);

    $change=DB::table('users')->where('status',1)->get();

    foreach($change as $cc)

    DB::table('contacts')->where('id',$cc->cid,)->update(
        ['degree'=>$cc->degree,
        'major'=>$cc->major,
        'training'=>$cc->training,
        'course'=>$cc->course,
        'phonenumber'=>$cc->phonenumber,
        'address'=>$cc->address,
        'university'=>$cc->university,
        'staff'=>$cc->staff,
        'jobposition'=>$cc->jobposition,
        'joblocation'=>$cc->joblocation,
        'slary'=>$cc->slary,
        'state'=>$cc->state], 

    );

 DB::table('users') ->update(['status' => 0]);
  
 return view('data.index',['data'=>$data]);
        

    }

    
    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
        Excel::import(new ImportContacts, request()->file('import_file'));

        return redirect()->to('admin/import-excel')->with('success', 'Contacts imported successfully.');

   
    }


    public function store(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
        Excel::import(new ImportContacts, request()->file('import_file'));
        return redirect()->to('admin/import-excel')->with('success', 'Contacts imported successfully.');

   
    }

    public function create()
    {
    
  
        return view('data.datacreate');
    }

    public function show($id)
    {
        //
    }

    public function student()
    {
        
          
        $students = Contact::where('nrc','!=' ,'NRC')->where('course','!=' ,'Course')->where('gmail','!=' ,'Email')->paginate(12);
        return view('data.studentaccount',compact('students'))
        ->with((request()->input('page', 1) - 1) * 12);  
    }
    

    public function edit($id)
    {
        
        $students=Contact::find($id);
        
        return view('data.editaccount',compact('students'));
    }


    public function update(Request $request, $id){
        if($request->hasfile('your_picture')){
            $image = $request->file('your_picture');
            $name = $image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $image = '/image/'.$name;
        }else{
            $image = request('oldprofile');
        }

        $contacts= Contact::find($id);
        $contacts->image=$image;
        $contacts->name=request('name');
        $contacts->degree=request('degree');
        $contacts->major=request('major');
        $contacts->training=request('training');
        $contacts->course=request('course');
        $contacts->phonenumber=request('phonenumber');
        $contacts->gmail=request('gmail');
        $contacts->password=request('password');
        
        $contacts->save();
        //return redirect()->route(admin/student);
        //return redirect()->route('/');
        return redirect()->to('admin/student');
        //return back()->with('success', 'Contacts DELETE successfully.');
    }

    public function destroy($id)
    {
        //
        $mystudents=Contact::find($id);
        $mystudents->delete();
        return back()->with('success', 'Contacts DELETE successfully.');
    }

    public function mailpereach(Request $request){
        $eachmail = Contact::get();
        dd($eachmail);
    }

     
    
    // public function email() {
    //     $data = array('name'=>"Virat Gandhi");
    //     Mail::send('mail', $data, function($message) {

    //        $message->to('jayshatty31@gmail.com', 'Tutorials Point')->subject
    //           ('Laravel HTML Testing Mail');
    //        $message->from('charlixesai@gmail.com','Virat Gandhi');
    //     });
        

    //     $students = Contact::latest()->paginate(12);
    //     return view('data.studentaccount',compact('students'))
    //     ->with((request()->input('page', 1) - 1) * 12);
    //  }

    







     }