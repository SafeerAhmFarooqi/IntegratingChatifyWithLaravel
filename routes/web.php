<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UsersController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/landingpage', function () {
    return view('landingpage');
})->name('landingpage');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/download', [App\Http\Controllers\HomeController::class, 'downloadPdf'])->name('download.pdf');
Route::get('/form',function(){
    return view('home');
});
Route::post('/form_submit',[PostController::class,'form_submit']);

Route::get('/profile',[PostController::class,'profile'])->name('profile');
Route::Put('/profile_update/{id}',[PostController::class,'profile_update'])->name('profile_update');

Route::resource('/groups',GroupsController::class);

Route::resource('/location',LocationController::class);

Route::resource('/users',UsersController::class);
require __DIR__.'/auth.php';
