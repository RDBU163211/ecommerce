<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\product;
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
Route ::get(/product/register;[productcontroller,"register"])

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get(/home, [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post(/product/register;[productcontroller,"stor"]) 