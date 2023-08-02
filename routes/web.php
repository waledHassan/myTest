<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'redirect']);

Route::get('/index',[HomeController::class,'redirect']);

Route::get('/addClient',[HomeController::class,'addClient']);

Route::post('/uploadclient',[HomeController::class,'uploadclient']);
Route::post('/search',[HomeController::class,'search']);