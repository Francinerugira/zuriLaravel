<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/create-user',[UserController::class,'createUser']);
Route::get('/get-users',[UserController::class,'getUsers']);
Route::get('/delete-user/{id}',[UserController::class,'deleteUser']);
Route::get('edit-user/{id}',[UserController::class,'editUser']);
Route::patch('update',[UserController::class,'updateUser']);