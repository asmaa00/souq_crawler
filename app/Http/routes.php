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

Route::get('/',  ['as' => 'mobiles.welcome', function () {
    return view('welcome');
}]);
Route::get('/extractor', ['as' => 'mobiles.index', 'uses' => 'ExtractController@index'] ); 
Route::get('/data', ['as' => 'mobiles.show', 'uses' => 'ExtractController@show'] ); 

