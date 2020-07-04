<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use App\Employeeinfo;
use Illuminate\Support\Facades\DB;
use App\Application;

class MainController extends Controller
{
    public function __construct($value='')
    {
        /*$this->middleware('auth');
        $this->middleware('is_seeker');*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        $sql = 'SELECT salary FROM jobs GROUP BY salary';

        $salaries = DB::select($sql);

        if ($category_id = request('category_id')) {
            //dd($category_id);
            $jobs=Job::where('category_id',$category_id)->get();
        }
        if($salary = request('salary')){
            //dd($salary);
            $jobs=Job::where('salary',$salary)->get();
        }
        $categories = Category::all();
        $employeeinfo = Employeeinfo::all();
        // var_dump($employeeinfo);
        
        return view('viewjob',compact('jobs','categories','employeeinfo', 'salaries'));
        //return view('viewjob');
        return redirect('viewjob');
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
        $jobdetail= Job::find($id);
        $app = Application::where(['seeker_id' => Auth()->id(),'job_id' => $id])->get();
        
        return view('jobdetail',compact('jobdetail','app'));
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
