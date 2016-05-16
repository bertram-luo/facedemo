<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['middlewareGroups' => ['web']], function(){
    Route::get('begin', function(){
        Session::flash('status', 'Hello There');
        return redirect('/');
    });
    Route::get('/', function(){
          //return view('welcome');
        return redirect('/courses/welcome');
    });
Route::auth();

Route::get('/courses/welcome', 'CourseController@index');
Route::get('/courses/lecture/{id}', 'CourseController@course');


Route::get('/home', 'HomeController@index');
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/about', 'PagesController@about');
});
