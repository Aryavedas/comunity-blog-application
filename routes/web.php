<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/{user}/edit', [UserController::class,'edit'])
->middleware('can:update,user');
Route::patch('/users/{user}', [UserController::class,'update'])
->middleware('can:update,user');
Route::delete('/users/{user}', [UserController::class,'destroy'])
->middleware('can:delete,user');
