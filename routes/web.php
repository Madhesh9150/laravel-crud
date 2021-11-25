<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CrudContoller;
use App\Http\Controllers\DemoController;
use Faker\Core\Blood;
use GuzzleHttp\Promise\Create;
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

// crud operation routes start
route::get('/',[CrudContoller::class,'index']);
Route::get('create',[CrudContoller::class,'create']);
Route::post('store',[CrudContoller::class,'store']);
route::get('edit/{id}',[CrudContoller::class,'edit']);
route::post('edit/update/{id}',[CrudContoller::class,'update']);
route::get('delete/{id}',[CrudContoller::class,'delete']);

//crud operation routes End

//blog routes
route::get('/',[BlogController::class,'index']);