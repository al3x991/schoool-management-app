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
//     return view('index');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
});
// Route::get('/home', function () {
//     return view('index');
// });
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/enrollnow/{id}', 'CourseController@enroll')->middleware('auth');
Route::get('/courses', 'CourseController@index');
Route::get('/user/dashboard', 'userController@dashboard');
// Route::get('mypassword/reset', 'PasswordController@showResetForm');
// Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
// Route::post('password/reset', 'Auth\PasswordController@reset');
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/reset', 'Auth\PasswordController@postReset');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
