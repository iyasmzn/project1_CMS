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
    return view('site.index');
});
Route::get('/home', function () {
    return view('admin.index');
});
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/register', 'AuthController@registrationProcess')->name('register');
Route::post('/login', 'AuthController@loginProcess')->name('login');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/create', 'UserController@create')->name('create');
        Route::post('/store', 'UserController@store')->name('store');
        Route::get('/edit/{id}', 'UserController@edit')->name('edit');
        Route::put('/update/{id}', 'UserController@update')->name('update');
        Route::delete('/delete/{id}', 'UserController@delete')->name('delete');
    });
    Route::prefix('/categories')->name('categories.')->group(function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/store', 'CategoryController@store')->name('store');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
        Route::post('/update/{id}', 'CategoryController@update')->name('update');
        Route::delete('/delete/{id}', 'CategoryController@delete')->name('delete');
    });
    Route::prefix('/articles')->name('articles.')->group(function () {
        Route::get('/', 'ArticleController@index')->name('index');
        Route::get('/create', 'ArticleController@create')->name('create');
        Route::get('/edit/{id}', 'ArticleController@create')->name('edit');
        Route::post('/store', 'ArticleController@store')->name('store');
        Route::get('/edit/{id}', 'ArticleController@edit')->name('edit');
        Route::post('/update/{id}', 'ArticleController@update')->name('update');
        Route::delete('/delete/{id}', 'ArticleController@delete')->name('delete');
    });
}
);
