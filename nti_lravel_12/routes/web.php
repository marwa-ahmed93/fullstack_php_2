<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(UserController::class)->group(function(){

   Route::get('/user' ,'index');

Route::get('/user/create' ,'create');
Route::post('/user/store' ,'store')->name('storeData');

});
 
Route::post('invokeClass',[ProvisionServer::class])->name('inv');

Route::resource('photos', PhotoController::class);



// Route::controller(UserController::class)->group(function(){

// Route::prefix('admin')->group(function(){
//    Route::get('/user' ,'index');

// Route::get('/user/create' ,'create');
// Route::post('/user/store' ,'store');
// });

Route::middleware(CheckRole::class)->group(function(){
});





Route::get('/greeting/{id?}/{name?}', function ($id=null , $name=null) {
    echo 'Hello '.$name. " user id ".$id;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::view('/welcome','hello');

Route::redirect('here','/greeting');




// Route::post('users',function(Request $request){
//     return view('hello');
// });

// Route::get('users',function(){
//     // return view('hello');
// });

Route::match(['get', 'post'],'/match', function () {
 echo "hello";
});