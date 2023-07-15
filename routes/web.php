<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    //Routing with Parameters
    Route::get('home/{name?}', function ($name=null) {
        return 'Hello '.$name;
    })->where('name','[A-Za-z]+');

    //Regular Expression Constraints
    Route::get('category/{name}', function ($name) {
    return $name;
    })->where('name', '[A-Za-z]+');
    Route::get('group/{id}', function ($id) {
    return $id;
    })->where('id','[0-9]+');
    Route::get('product/{id}/{name}', function ($id, $name) {
    return 'Product ID:'.$id.'<br>Product name:'.$name;
    })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

    //Named Routes
    Route::get('guest/showroom/data/{name?}', function ($name=null) {
    return 'Hello '.$name;
    })->name('guestprofile');

    //การส่งเข้า Controller
 Route::get('/', [HomeController::class,'home']);
 Route::get('about', [HomeController::class,'about']);
 Route::get('service', [HomeController::class,'service']);
 Route::get('contact', [HomeController::class,'contact']);
 Route::get('login', [HomeController::class,'login']);
 
 Route::get('employees', [HomeController::class,'employees']);
 

