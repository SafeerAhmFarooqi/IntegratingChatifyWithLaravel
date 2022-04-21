<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserVoucherController;
use App\Http\Controllers\GroupMembersController;
use App\Http\Controllers\GroupPostController;
use App\Http\Controllers\PeopleNearbyController;
use App\Http\Controllers\Admin\ShopCategoryController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\ShopAuthController;
use App\Http\Controllers\Shop\ShopController;


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

Route::get('/form',function(){
    return view('home');
});



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

//User Vouchers
Route::resource('/user_voucher',UserVoucherController::class);

//User Search
Route::post('/user_search', [UsersController::class, 'user_search'])->name('user_search');

//Group  Members
Route::resource('/group_members',GroupMembersController::class);

//People Nearby
Route::resource('/people_nearby',PeopleNearbyController::class);

//Group Posts
Route::resource('/group_posts',GroupPostController::class);

Route::get('/show_group/{id}/{name}', [GroupPostController::class, 'show_group'])->name('show_group');



// Route::get('Admin/users_list', [App\Http\Controllers\UsersController::class, 'users_list'])->name('Admin/users_list');



// //Admin Section 
Route::get('/Admin/login', [AdminAuthController::class, 'showLoginForm'])->name('Admin.login');
Route::get('/Admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('Admin.register');

Route::post('/Admin/register', [AdminAuthController::class, 'register'])->name('Admin.register');

Route::post('/Admin/login', [AdminAuthController::class, 'login'])->name('Admin.login');

Route::get('/Admin/logout', [AdminAuthController::class, 'logout'])->name('Admin.logout');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('Admin/dashboard', [AdminController::class, 'dashboard'])->name('Admin.dashboard');


Route::get('/Admin/users_list', [App\Http\Controllers\Admin\AdminController::class, 'users_list'])->name('Admin.users_list');

 Route::get('/Admin/user_status/active/{id}',[App\Http\Controllers\Admin\AdminController::class, 'active_status']);

Route::get('/Admin/user_status/de_active/{id}',[App\Http\Controllers\Admin\AdminController::class, 'de_active_status']);

Route::get('/Admin/user_delete/{id}',[App\Http\Controllers\Admin\AdminController::class, 'user_delete']);

Route::get('/Admin/groups_list', [App\Http\Controllers\Admin\AdminController::class, 'groups_list'])->name('Admin.groups_list');

Route::get('/Admin/shops_list', [App\Http\Controllers\Admin\AdminController::class, 'shops_list'])->name('Admin.shops_list');

 Route::get('/Admin/shop_status/active/{id}',[App\Http\Controllers\Admin\AdminController::class, 'shop_status_active']);

Route::get('/Admin/shop_status/de_active/{id}',[App\Http\Controllers\Admin\AdminController::class, 'shop_status_deactive']);

Route::get('/Admin/shop_delete/{id}',[App\Http\Controllers\Admin\AdminController::class, 'shop_delete']);

//Shops Category
Route::resource('/Admin/shops_category',ShopCategoryController::class);


//Locations
Route::resource('/Admin/locations',LocationController::class);


//Vouchers
Route::get('/Admin/vouchers_list', [App\Http\Controllers\Admin\AdminController::class, 'vouchers_list'])->name('Admin.vouchers_list');

//Users posts
Route::get('Admin/users_posts', [App\Http\Controllers\Admin\AdminController::class, 'users_posts'])->name('Admin.users_posts');

//Active Users
Route::get('Admin/active_users', [App\Http\Controllers\Admin\AdminController::class, 'active_users'])->name('Admin.active_users');

//Block Users
Route::get('Admin/block_users', [App\Http\Controllers\Admin\AdminController::class, 'block_users'])->name('Admin.block_users');


});




//Shop Section

Route::get('Shop/register',[ShopAuthController::class, 'showRegisterForm'])->name('Shop.register');
Route::post('Shop/register',[ShopAuthController::class, 'register'])->name('Shop.register');

//Route::get('/Shop/login', [ShopAuthController::class, 'showLoginForm'])->name('Shop.login');

Route::get('/Shop/login',function(){
     return view('auth.shopLogin');
 });

Route::post('/Shop/login', [ShopAuthController::class, 'login'])->name('Shop.login');

Route::get('/Shop/logout', [ShopAuthController::class, 'logout'])->name('Shop.logout');

Route::group(['middleware' => ['auth:shop']], function () {

    Route::get('Shop/dashboard', [ShopController::class, 'dashboard'])->name('Shop.dashboard');


//Shop Vouchers
Route::get('Shop/vouchers',[App\Http\Controllers\Shop\VoucherController::class, 'vouchers']);

Route::get('Shop/create_vouchers',[App\Http\Controllers\Shop\VoucherController::class, 'create_vouchers']);

Route::post('Shop/store_voucher',[App\Http\Controllers\Shop\VoucherController::class, 'store_voucher']);

Route::get('Shop/use_vouchers',[App\Http\Controllers\Shop\VoucherController::class, 'use_vouchers'])->name('Shop.use_vouchers');

Route::get('/Shop/check',function(){
     return view('Shop.chech_voucher');
 });

Route::post('Shop/check_voucher',[App\Http\Controllers\Shop\VoucherController::class, 'check_voucher']);




});
//Shop Section End
require __DIR__.'/auth.php';
