<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('login/{service}', 'Auth\LoginController@redirectToProvider')->name('login.service');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.service.callback');

Route::get('/template','TemplateController@getTemplate')->name('get.template');
Route::get('/template/{id}','TemplateController@setTemplate')->name('set.template');


Route::group(['prefix' => 'resume', 'as' => 'resume.'], function(){

    Route::get('/basics','ResumeController@getBasics')->name('get.basics');
    Route::post('/basics','ResumeController@setBasics')->name('set.basics');
    
    Route::get('/works','ResumeController@getWorks')->name('get.works');
    Route::post('/works','ResumeController@setWorks')->name('set.works');
    
    Route::get('/educations','ResumeController@getEducations')->name('get.educations');
    Route::post('/educations','ResumeController@setEducations')->name('set.educations');
    
    Route::get('/skills','ResumeController@getSkills')->name('get.skills');
    Route::post('/skills','ResumeController@setSkills')->name('set.skills');
    
    Route::get('/references','ResumeController@getReferences')->name('get.references');
    Route::post('/references','ResumeController@setReferences')->name('set.references');
    
    Route::get('/summary','ResumeController@getSummary')->name('get.summary');
    Route::post('/summary','ResumeController@setSummary')->name('set.summary');

    Route::get('/display/{template}','TemplateController@show')->name('show');

    Route::get('/download/pdf','TemplateController@downloadPDF')->name('download.pdf');
});