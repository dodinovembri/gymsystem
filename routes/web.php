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


Route::get('/', 'FrontEnd\FrontEndController@index')->name('index');
Route::get('/', 'FrontEnd\FrontEndController@index')->name('fe');

Route::name('fe.')->group(function () {
	Route::get('fe/show/{id}', 'FrontEnd\FrontEndController@show')->name('show');
	Route::name('gym.')->group(function () {
		Route::get('fe/gym/index', 'FrontEnd\GymController@index')->name('index');
		Route::get('fe/gym/create', 'FrontEnd\GymController@create')->name('create');
		Route::post('fe/gym/store', 'FrontEnd\GymController@store')->name('store');
		Route::get('fe/gym/show/{id}', 'FrontEnd\GymController@show')->name('show');
		Route::get('fe/gym/edit/{id}', 'FrontEnd\GymController@edit')->name('edit');
		Route::post('fe/gym/update/{id}', 'FrontEnd\GymController@update')->name('update');
		Route::get('fe/gym/destroy/{id}', 'FrontEnd\GymController@destroy')->name('destroy');
	});	
	Route::name('news.')->group(function () {
		Route::get('fe/news/index', 'FrontEnd\NewsController@index')->name('index');
		Route::get('fe/news/create', 'FrontEnd\NewsController@create')->name('create');
		Route::post('fe/news/store', 'FrontEnd\NewsController@store')->name('store');
		Route::get('fe/news/show/{id}', 'FrontEnd\NewsController@show')->name('show');
		Route::get('fe/news/edit/{id}', 'FrontEnd\NewsController@edit')->name('edit');
		Route::post('fe/news/update/{id}', 'FrontEnd\NewsController@update')->name('update');
		Route::get('fe/news/destroy/{id}', 'FrontEnd\NewsController@destroy')->name('destroy');
	});		

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::name('admin.')->group(function () {
	Route::name('criteria.')->group(function () {
		Route::get('admin/criteria/index', 'Admin\CriteriaController@index')->name('index');
		Route::get('admin/criteria/create', 'Admin\CriteriaController@create')->name('create');
		Route::post('admin/criteria/store', 'Admin\CriteriaController@store')->name('store');
		Route::get('admin/criteria/show/{id}', 'Admin\CriteriaController@show')->name('show');
		Route::get('admin/criteria/edit/{id}', 'Admin\CriteriaController@edit')->name('edit');
		Route::post('admin/criteria/update/{id}', 'Admin\CriteriaController@update')->name('update');
		Route::get('admin/criteria/destroy/{id}', 'Admin\CriteriaController@destroy')->name('destroy');
	});
	Route::name('criterion_value.')->group(function () {
		Route::get('admin/criterion_value/index/{id}', 'Admin\CriterionValueController@index')->name('index');
		Route::get('admin/criterion_value/create/{id}', 'Admin\CriterionValueController@create')->name('create');
		Route::post('admin/criterion_value/store/{id}', 'Admin\CriterionValueController@store')->name('store');
		Route::get('admin/criterion_value/show/{id}/criteria_id/{criteria_id}', 'Admin\CriterionValueController@show')->name('show');
		Route::get('admin/criterion_value/edit/{id}/criteria_id/{criteria_id}', 'Admin\CriterionValueController@edit')->name('edit');
		Route::post('admin/criterion_value/update/{id}', 'Admin\CriterionValueController@update')->name('update');
		Route::get('admin/criterion_value/destroy/{id}', 'Admin\CriterionValueController@destroy')->name('destroy');
	});	
	Route::name('alternative.')->group(function () {
		Route::get('admin/alternative/index', 'Admin\AlternativeController@index')->name('index');
		Route::get('admin/alternative/create', 'Admin\AlternativeController@create')->name('create');
		Route::post('admin/alternative/store', 'Admin\AlternativeController@store')->name('store');
		Route::get('admin/alternative/show/{id}', 'Admin\AlternativeController@show')->name('show');
		Route::get('admin/alternative/edit/{id}', 'Admin\AlternativeController@edit')->name('edit');
		Route::post('admin/alternative/update/{id}', 'Admin\AlternativeController@update')->name('update');
		Route::get('admin/alternative/destroy/{id}', 'Admin\AlternativeController@destroy')->name('destroy');
		Route::get('admin/alternative/add_value/{id}', 'Admin\AlternativeController@add_value')->name('add_value');	
		Route::post('admin/alternative/store_alternative_value/{id}', 'Admin\AlternativeController@store_alternative_value')->name('store_alternative_value');	
	});	
	Route::name('ranking.')->group(function () {
		Route::get('admin/ranking/index', 'Admin\RankingController@index')->name('index');		
	});
	Route::name('user_account.')->group(function () {
		Route::get('admin/user_account/index', 'Admin\UserAccountController@index')->name('index');
		Route::get('admin/user_account/create', 'Admin\UserAccountController@create')->name('create');
		Route::post('admin/user_account/store', 'Admin\UserAccountController@store')->name('store');
		Route::get('admin/user_account/show/{id}', 'Admin\UserAccountController@show')->name('show');
		Route::get('admin/user_account/edit/{id}', 'Admin\UserAccountController@edit')->name('edit');
		Route::post('admin/user_account/update/{id}', 'Admin\UserAccountController@update')->name('update');
		Route::get('admin/user_account/destroy/{id}', 'Admin\UserAccountController@destroy')->name('destroy');
	});
	Route::name('web_home.')->group(function () {
		Route::get('admin/web_home/index', 'Admin\WebHomeController@index')->name('index');
		Route::get('admin/web_home/create', 'Admin\WebHomeController@create')->name('create');
		Route::post('admin/web_home/store', 'Admin\WebHomeController@store')->name('store');
		Route::get('admin/web_home/show/{id}', 'Admin\WebHomeController@show')->name('show');
		Route::get('admin/web_home/edit/{id}', 'Admin\WebHomeController@edit')->name('edit');
		Route::post('admin/web_home/update/{id}', 'Admin\WebHomeController@update')->name('update');
		Route::get('admin/web_home/destroy/{id}', 'Admin\WebHomeController@destroy')->name('destroy');
	});	
	Route::name('web_about_us.')->group(function () {
		Route::get('admin/web_about_us/index', 'Admin\WebAboutUsController@index')->name('index');
		Route::get('admin/web_about_us/create', 'Admin\WebAboutUsController@create')->name('create');
		Route::post('admin/web_about_us/store', 'Admin\WebAboutUsController@store')->name('store');
		Route::get('admin/web_about_us/show/{id}', 'Admin\WebAboutUsController@show')->name('show');
		Route::get('admin/web_about_us/edit/{id}', 'Admin\WebAboutUsController@edit')->name('edit');
		Route::post('admin/web_about_us/update/{id}', 'Admin\WebAboutUsController@update')->name('update');
		Route::get('admin/web_about_us/destroy/{id}', 'Admin\WebAboutUsController@destroy')->name('destroy');
	});	
	Route::name('news.')->group(function () {
		Route::get('admin/news/index', 'Admin\NewsBackendController@index')->name('index');
		Route::get('admin/news/create', 'Admin\NewsBackendController@create')->name('create');
		Route::post('admin/news/store', 'Admin\NewsBackendController@store')->name('store');
		Route::get('admin/news/show/{id}', 'Admin\NewsBackendController@show')->name('show');
		Route::get('admin/news/edit/{id}', 'Admin\NewsBackendController@edit')->name('edit');
		Route::post('admin/news/update/{id}', 'Admin\NewsBackendController@update')->name('update');
		Route::get('admin/news/destroy/{id}', 'Admin\NewsBackendController@destroy')->name('destroy');
	});									
});