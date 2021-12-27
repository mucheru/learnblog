<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\category\Category;
use  App\Http\Controllers\topic\Topic;

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
    return redirect('/home');
});
Route::get('/category',[Category::class,'createCategory']);
Route::post('/postcategory',[Category::class,'storeCategory']);
Route::get('/createtopic',[Topic::class,'index']);
Route::post('/posttopic',[Topic::class,'create']);
Route::get('/home',[Topic::class,'homedata']);
Route::get('/laravelcrud',[Topic::class,'laravelcrud']); 
  





