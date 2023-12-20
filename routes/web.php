<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
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



// 
Route::resource('films',FilmController::class);
Route::get('/users', [UserController::class,'create']);
Route::post('/users', [UserController::class,'store']);
// Route::get('/facture/{n}', function ($n) {
//     return view('facture')->with('numero',$n);
// });


// Route::get('/', function () {
//     return view('page1');
// });
// Route::get('/article/{n}', [ArticleController::class,'show']);