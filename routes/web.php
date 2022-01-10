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
//Admin Routes
Route::get('/course/Index','courseController@index')->name('course_index');
Route::post('/course/Save','courseController@save')->name('save_course');
Route::get('/course/delete/{id}','courseController@delete')->name('delete_course');

Route::get('/category/Index','categoryController@index')->name('category_index');
Route::post('/category/Save','categoryController@save')->name('save_category');
Route::get('/category/delete/{id}','categoryController@delete')->name('delete_category');

//Front End Routes
Route::get('/','HomeController@index')->name('front_index');
Route::get('/search','HomeController@indexSearch')->name('front_index_search');




