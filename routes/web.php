<?php

use Illuminate\Support\Facades\Route;
 use Illuminate\Http\Request;

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

//create basic route
Route::get('user',function()
{

    return view('user');
    //return 'user';
}
);

//route post use it when we send data from a forum to an other page
Route::post('user',function(Request $request ){
return  $request;

});