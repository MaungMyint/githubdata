<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Contact;
use App\User;
use App\Http\Controllers\Controller;
use App\Imports\ImportContacts;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;






class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     * 
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


 

    public function index()
    {
        return view('home');
    }





}
