<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;



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
Auth::routes();
Route::get('/home',[HomeController::class,'index']);
Route::get('/post/{id}',[HomeController::class,'show']);

Route::group(['prefix'=>'admin'],function(){
    Route::resources([
        'posts' => 'PostController',
        'comments' => 'CommentController',
    ]);
});



