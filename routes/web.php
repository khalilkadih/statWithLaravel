<?php

use Illuminate\Support\Facades\Route;
 use Illuminate\Http\Request;
 use App\Http\Controllers\AdminController;
 use App\Http\Controllers\userController;
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
/*////////////////////////////////////////////////////////////////////////*/
Route::get('/', function () {
    return view('welcome');
});
/*////////////////////////////////////////////////////////////////////////*/
//create basic route
Route::get('user',function()
{

    return view('user');
    //return 'user';
}
);
/*////////////////////////////////////////////////////////////////////////*/
//route post use it when we send data from a forum to an other page
Route::post('user',function(Request $request ){
return  $request;
});
/*////////////////////////////////////////////////////////////////////////*/
//route with parametere 
// Route::get('user/{id}',function( int $id){
//     if($id==1){
//         return view('admin');
//     }
//     else return view('dashbord');

// //return $id;
// });

/*////////////////////////////////////////////////////////////////////////*/

// Route::get('user',function(){
// $fullName="khalil el kadih";
// return view('user',compact('fullName'));
// });
Route::get('admin',function(){
return view('/admin');

});
Route::get('dashboard',function(){

    return view('/dashboard');
});


/****************************************************************/

// Route::get('admin',[AdminController::class,'getAllAdmin']);
// Route::get('admin/Update',[AdminController::class,'Update']);
// Route::get('admin_Add',[AdminController::class,'addAdmin']);


/* to avoid all this repetition laravel 9 a coming a new solution optimiser*/

Route::controller(AdminController::class)->group(function(){

    Route::get('admin','getAllAdmin');
    Route::get('admin_Add','addAdmin');
    Route::get('admin_Edit','Update');
});

//------------------------------------------------------------------------------------
/* Now we try to resum all of that with controller ressources */

Route::resource('user',)