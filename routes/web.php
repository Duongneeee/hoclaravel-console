<?php

use Illuminate\Support\Facades\Artisan;
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
    return view('welcome');
});

Route::get('clear-cache',function(){
    $status = Artisan::call('cache:clear');
    // dd($status);
});

Route::get('show-user',function(){
    Artisan::call('user:show');
    // echo Artisan::output();
});

Route::get('send-email',function(){
     Artisan::call('email:sends',['email'=>'contact@gmail.com','--queue'=>'abc']);
     echo nl2br(Artisan::output());
});
