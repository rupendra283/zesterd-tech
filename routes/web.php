<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('vote/store',[App\Http\Controllers\VoteController::class, 'store'])->name('vote.store');
Route::get('vote/token',[App\Http\Controllers\VoteController::class, 'verifyTokenPage'])->name('vote.verify.token');
Route::post('vote/verify/token',[App\Http\Controllers\VoteController::class, 'TokenMatch'])->name('verify.token.match');
Route::get('vote/show/{id}',[App\Http\Controllers\VoteController::class, 'show'])->name('vote.show');
