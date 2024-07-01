<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function academic_writing (){
        return view('academic-writing');
    }
    public function buy_assignment (){
        return view('buy-assignment');
    }
    public function buy_essay (){
        return view('buy-essay');
    }
    public function case_study_help (){
        return view('case-study-help');
    }
    public function childcare_assignment_help (){
        return view('childcare-assignment-help');
    }
    public function cipd_assignment_help (){
        return view('cipd-assignment-help');
    }
    public function coursework_writing_help (){
        return view('coursework-writing-help');
    }
    public function digital_marketing_assignment_help (){
        return view('digital-marketing-assignment-help');
    }
    public function healthcare_assignment_help(){
        return view('healthcare-assignment-help');
    }
    public function hnd_assignment_help (){
        return view('hnd-assignment-help');
    }
    public function assignment_help_ireland (){
        return view('assignment-help-ireland');
    }
    public function law_assignment_help(){
        return view('law-assignment-help');
    }
    public function math_assignment_help (){
        return view('math-assignment-help');
    }
    public function nursing_assignment_help (){
        return view('nursing-assignment-help');
    }
    public function pay_for_an_assignment (){
        return view('pay-for-an-assignment');
    }
    public function psychology_assignment_help (){
        return view('psychology-assignment-help');
    }
    public function qqi_assignment_help(){
        return view('qqi-assignment-help');
    }
    public function report_writing_help (){
        return view('report-writing-help');
    }
    public function research_paper_writing(){
        return view('research-paper-writing');
    }
    public function thesis_writing_help (){
        return view('thesis-writing-help');
    }
    public function write_my_assignment(){
        return view('write-my-assignment');
    }
    public function write_my_essay (){
        return view('write-my-essay');
    }
    public function write_my_paper (){
        return view('write-my-paper');
    }  
    
}