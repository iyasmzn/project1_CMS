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

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::prefix('/categories')->name('categories.')->group(function () {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::get('/edit/', 'CategoryController@create')->name('edit');
    });
    Route::prefix('/articles')->name('articles.')->group(function () {
        Route::get('/', 'ArticleController@index')->name('index');
        Route::get('/create', 'ArticleController@create')->name('create');
        Route::get('/edit/', 'ArticleController@create')->name('edit');
    });
}
);
