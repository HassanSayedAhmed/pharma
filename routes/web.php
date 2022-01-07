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
Route::get('/Account/Login','AccountController@login')->name('login');
Route::post('/Account/PostLogin','AccountController@postLogin')->name('post_login');
Route::get('/Account/Logout','AccountController@logout')->name('logout');

Route::get('/Dashboard/Index','DashboardController@index')->name('dashboard_index');

Route::get('/Category/Index','CategoryController@index')->name('category_index');
Route::post('/Category/Save','CategoryController@save')->name('save_category');
Route::post('/Sub/Category/Save','CategoryController@saveSub')->name('save_sub_category');
Route::get('/Category/delete/{id?}','CategoryController@delete')->name('delete_category');

Route::get('/Sub/Category/Index','SubCategoryController@index')->name('sub_category_index');
Route::get('/Sub/Category/delete/{id?}','SubCategoryController@delete')->name('delete_sub_category');

Route::get('/Product/Index','ProductController@index')->name('product_index');
Route::post('/Product/Save','ProductController@save')->name('save_product');
Route::get('/Product/delete/{id?}','ProductController@delete')->name('delete_product');

Route::get('/Blog/Index','BlogController@index')->name('blog_index');
Route::post('/Blog/Save','BlogController@save')->name('save_blog');
Route::get('/Blog/delete/{id?}','BlogController@delete')->name('delete_blog');

Route::get('/User/Index','UserController@index')->name('user_index');
Route::post('/User/Save','UserController@save')->name('save_user');
Route::get('/User/delete/{id?}','UserController@delete')->name('delete_user');

Route::get('/careers/Index','CarrierController@index')->name('job_index');
Route::post('/careers/Save','CarrierController@save')->name('save_job');
Route::get('/careers/delete/{id?}','CarrierController@delete')->name('delete_job');

Route::post('/requirement/save','CarrierController@saveRequirement')->name('save_requirement');
Route::get('/requirement/delete/{id?}','CarrierController@deleteRequirement')->name('delete_requirement');

Route::post('/whatWeExpect/save','CarrierController@saveWhatWeExpect')->name('save_what_we_expect');
Route::get('/whatWeExpect/delete/{id?}','CarrierController@deleteWhatWeExpect')->name('delete_what_we_expect');

Route::get('/Contact/Index','ContactController@index')->name('contact_index');

Route::get('/job/applicant/Index','JobApplicantController@index')->name('job_applicant_index');
Route::post('/job/applicant/Save','JobApplicantController@save')->name('save_job_applicant');
Route::get('/job/applicant/delete/{id?}','JobApplicantController@delete')->name('delete_job_applicant');

//Front End Routes
Route::get('/','HomeController@index')->name('front_index');
Route::get('/ar','HomeController@indexAr')->name('front_index_ar');

Route::get('/en/aboutus','HomeController@aboutus')->name('front_about_us');
Route::get('/ar/aboutus','HomeController@aboutusAr')->name('front_about_us_ar');

Route::get('/en/products/{category?}','HomeController@products')->name('front_products');
Route::get('/ar/products/{category?}','HomeController@productsAr')->name('front_products_ar');

Route::get('/en/blogs','HomeController@blogs')->name('front_blogs');
Route::get('/ar/blogs','HomeController@blogsAr')->name('front_blogs_ar');

Route::get('/en/blog/detail/{blog}','HomeController@blogDetail')->name('front_blog_detail');
Route::get('/ar/blog/detail/{blog}','HomeController@blogDetailAr')->name('front_blog_detail_ar');

Route::get('/en/covid19','HomeController@covid')->name('front_covid_19');
Route::get('/ar/covid19','HomeController@covidAr')->name('front_covid_19_ar');

Route::get('/en/careers','HomeController@careers')->name('front_careers');
Route::get('/ar/careers','HomeController@careersAr')->name('front_careers_ar');

Route::get('/en/careers/apply/{id?}','HomeController@careersApply')->name('front_careers_apply');
Route::get('/ar/careers/apply/{id?}','HomeController@careersApplyAr')->name('front_careers_apply_ar');

Route::get('/en/contactus','HomeController@contactus')->name('front_contactus');
Route::get('/ar/contactus','HomeController@contactusAr')->name('front_contactus_ar');

Route::get('/careers/apply/{id?}','HomeController@careersApply')->name('front_apply_career');
Route::post('/careers/apply/to/job/app','HomeController@careersApplyToJob')->name('front_apply_to_job');



