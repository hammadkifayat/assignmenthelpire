<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('academic-writing', 'HomeController@academic_writing')->name('academic-writing');
Route::get('buy-assignment', 'HomeController@buy_assignment')->name('buy-assignment');
Route::get('buy-essay', 'HomeController@buy_essay')->name('buy-essay');
Route::get('case-study-help', 'HomeController@case_study_help')->name('case-study-help');
Route::get('childcare-assignment-help', 'HomeController@childcare_assignment_help')->name('childcare-assignment-help');
Route::get('cipd-assignment-help', 'HomeController@cipd_assignment_help')->name('cipd-assignment-help');
Route::get('coursework-writing-help', 'HomeController@coursework_writing_help')->name('coursework-writing-help');
Route::get('digital-marketing-assignment-help', 'HomeController@digital_marketing_assignment_help')->name('digital-marketing-assignment-help');
Route::get('do-my-assignment', 'HomeController@do_my_assignment')->name('do-my-assignment');
Route::get('essay-writing', 'HomeController@essay_writing')->name('essay-writing');
Route::get('ghostwriting-help', 'HomeController@ghostwriting_help')->name('ghostwriting-help');
Route::get('healthcare-assignment-help', 'HomeController@healthcare_assignment_help')->name('healthcare-assignment-help');
Route::get('hnd-assignment-help', 'HomeController@hnd_assignment_help')->name('hnd-assignment-help');
Route::get('assignment-help-ireland', 'HomeController@assignment_help_ireland')->name('assignment-help-ireland');
Route::get('law-assignment-help', 'HomeController@law_assignment_help')->name('law-assignment-help');
Route::get('math-assignment-help', 'HomeController@math_assignment_help')->name('math-assignment-help');
Route::get('nursing-assignment-help', 'HomeController@nursing_assignment_help')->name('nursing-assignment-help');
Route::get('pay-for-an-assignment', 'HomeController@pay_for_an_assignment')->name('pay-for-an-assignment');
Route::get('psychology-assignment-help', 'HomeController@psychology_assignment_help')->name('psychology-assignment-help');
Route::get('qqi-assignment-help', 'HomeController@qqi_assignment_help')->name('qqi-assignment-help');
Route::get('report-writing-help', 'HomeController@report_writing_help')->name('report-writing-help');
Route::get('research-paper-writing', 'HomeController@research_paper_writing')->name('research-paper-writing');
Route::get('thesis-writing-help', 'HomeController@thesis_writing_help')->name('thesis-writing-help');
Route::get('write-my-assignment', 'HomeController@write_my_assignment')->name('write-my-assignment');
Route::get('write-my-essay', 'HomeController@write_my_essay')->name('write-my-essay');
Route::get('write-my-paper', 'HomeController@write_my_paper')->name('write-my-paper');


















    
               
                   
                  
           
              
                 
                 
             
                    
                    
                 
                   
                 
           
                   
          
                   
             
                  
                   
                   