<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    function index(){
        return view('index');
    }
    function student(){
        return view('student');
    }
    function supervisor(){
        return view('supervisor');
    }
}
