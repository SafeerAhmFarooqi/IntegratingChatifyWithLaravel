<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;

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

Route::post('/form_submit',[PostController::class,'form_submit']);

Route::get('/profile',[PostController::class,'profile'])->name('profile');
Route::Put('/profile_update/{id}',[PostController::class,'profile_update'])->name('profile_update');



//User Profile
Route::resource('/profile',ProfileController::class);

//Edit User Profile Pic
Route::put('/edit_p_pic/{id}', [App\Http\Controllers\ProfileController::class, 'edit_p_pic'])->name('edit_p_pic');

//Profile Privacy
Route::put('/profile_privacy/{id}', [App\Http\Controllers\ProfileController::class, 'profile_privacy'])->name('profile_privacy');

//User Posts
Route::resource('/post',PostController::class);

//Groups
Route::resource('/groups',GroupsController::class);

//Locations
Route::resource('/location',LocationController::class);

//Users
Route::resource('/users',UsersController::class);
require __DIR__.'/auth.php';
