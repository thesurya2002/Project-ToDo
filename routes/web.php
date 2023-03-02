<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddtodoController;

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

Route::get('/addtodo', function () {
    return view('welcome');
});
// Route::get('user', 'UserController@index')->name('user');
Route::get('/',[AddtodoController::class,'index'] );
Route::post('/register',[AddtodoController::class,'add']);
