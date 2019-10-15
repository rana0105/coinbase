<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// admin route for dashboard
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::resource('agentcode', 'Admin\AgentCodeController');

});

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/update-profile', 'HomeController@updateProfile')->name('update.profile');
});