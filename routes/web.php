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
    return view('inicio');
}); 

Auth::routes();

////////////Paginas publicas///////////////
Route::get('/home', 'PageController@inicio')->name('home');
Route::get('/inicio', 'PageController@inicio')->name('inicio');
Route::get('/marketplace', 'PageController@marketplace')->name('marketplace');
Route::get('/acercaDe', 'PageController@acercaDe')->name('acercaDe');

/////////////Solo Admin/////////////////
Route::get('/SolicitudesDeProductos', 'AdminPageController@SolicitudesDeProductos')->name('SolicitudesDeProductos');





// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    //Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});


// Vendor routes
Route::prefix('user')->group(function(){
    Route::get('/', 'Users\Vendor\VendorController@index')->name('vendor.dashboard');
    Route::get('/login', 'Auth\VendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login', 'Auth\VendorLoginController@login')->name('vendor.login.submit');
    Route::get('/register', 'Auth\VendorRegisterController@showRegisterForm')->name('vendor.register');
    Route::post('/register', 'Auth\VendorRegisterController@register')->name('vendor.register.submit');
});