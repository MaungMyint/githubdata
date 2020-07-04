<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index($value=''){
    	return view ('main');
    }
    public function detail($value=''){
    	return view ('detail');
    }
}
