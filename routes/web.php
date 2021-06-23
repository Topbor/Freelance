<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
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
    return view('home');
});
Route::get('/getstarted', function () {
    return view('getstarted');
})->name('getstarted');

Route::get('/edit/{user}',[UserController::class, 'edit'])->name('user.edit');

Route::put('/update/{user}',[UserController::class, 'update'])->name('user.update');

Route::get('/user-jobs/{user}',[UserController::class, 'showJobs'])->name('user.jobs');

Route::get('/user-suggestions',[UserController::class, 'suggestion'])->name('user.suggestion');

Route::post('/make-suggestionug',[UserController::class, 'makeSuggestion'])->name('user.make.suggestion');

Route::resource('jobs', JobController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
