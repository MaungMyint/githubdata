<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Job;

class JobController extends Controller
{
    public function __construct($value='')
    {
        $this->middleware('auth');
        $this->middleware('is_employee');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
                
        return view('job',compact('categories'));
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
        // Store Data
        Job::create([
            "name" => request('name'),
            "vacancy" => request('vacancy'),
            "salary" => request('salary'),
            "experience" => request('experience'),
            "details" => request('detail'),
            "qualifications" => request('qualification'),
            "location" => request('location'),
            "company_id" => Auth()->id(),
            "category_id" => request('category'),
            "enddate" => request('enddate'),
            

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
