<?php

use App\Http\Controllers\AboutUs;
use App\Http\Controllers\ContactUs;
use App\Http\Controllers\Products;
use App\Http\Controllers\Program;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\News;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[Welcome::class,'home']);
Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games',[Products::class,'products1']);
    Route::get('/marbel-and-friends-kids-games',[Products::class,'products2']);
    Route::get('/riri-story-books',[Products::class,'products3']);
    Route::get('/kolak-kids-songs',[Products::class,'products4']);
});
Route::get('/news/{id}', [News::class,'news']);
Route::prefix('/program')->group(function(){
    Route::get('/karir',[Program::class,'program1']);
    Route::get('/magang',[Program::class,'program2']);
    Route::get('/kunjungan-industri',[Program::class,'program3']);
});
Route::get('/about-us',[AboutUs::class,'aboutus']);
Route::get('/contactus',[ContactUs::class,'contactus']);