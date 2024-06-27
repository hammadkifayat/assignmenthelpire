<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function academic_writing (){
        return view('academic-writing');
    }
}
