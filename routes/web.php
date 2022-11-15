<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

require __DIR__.'/auth.php';

Route::get('/login', [AdminController::class, 'login'])->name('login');

Route::any('/inventory/{id?}', 'HomeController@inventory')->name('inventory');
Route::get('/detail/{id?}', 'HomeController@detail')->name('detail');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/service', 'HomeController@service')->name('service');
Route::get('/warranty', 'HomeController@warranty')->name('warranty');
Route::get('/finance', 'HomeController@finance')->name('finance');
Route::get('/', 'HomeController@index')->name('home');
Route::any('/searchSort', 'SearchController@searchSort')->name('searchSort');
Route::any('/productSort', 'SearchController@productSort')->name('productSort');


Route::middleware(['admin'])->group(function () {
        Route::name('admin.')->namespace('Admin')->group(function() {
            Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
            Route::get('profile', 'AdminController@profile')->name('profile');
            Route::post('general-update', 'AdminController@generalupdate')->name('general.update');
            Route::post('pass-update', 'AdminController@passupdate')->name('pass.update');

            Route::name('user.')->prefix('user')->group(function () {
                Route::get('list', 'UserController@list')->name('list');
                Route::get('add', 'UserController@add')->name('add');
                Route::post('save', 'UserController@save')->name('save');
                Route::get('edit/{id?}', 'UserController@edit')->name('edit');
                Route::get('delete/{id?}', 'UserController@delete')->name('delete');
                });
            Route::name('make.')->prefix('make')->group(function () {
                Route::get('list', 'MakeController@list')->name('list');
                Route::any('load_make', 'MakeController@loadMake')->name('loadMake');
                Route::post('save', 'MakeController@save')->name('save');
                Route::get('delete/{id?}', 'MakeController@delete')->name('delete');
                });
                Route::name('model.')->prefix('model')->group(function () {
                Route::get('list', 'CarModelController@list')->name('list');
                Route::any('load_model', 'CarModelController@loadModel')->name('loadModel');
                Route::post('save', 'CarModelController@save')->name('save');
                Route::get('delete/{id?}', 'CarModelController@delete')->name('delete');
                });
                Route::name('engine.')->prefix('engine')->group(function () {
                Route::get('list', 'EngineController@list')->name('list');
                Route::any('load_engine', 'EngineController@loadEng')->name('loadEng');
                Route::post('save', 'EngineController@save')->name('save');
                Route::get('delete/{id?}', 'EngineController@delete')->name('delete');
                });
                Route::name('interiorcolor.')->prefix('interiorcolor')->group(function () {
                Route::get('list', 'InteriorColorController@list')->name('list');
                Route::any('load_interior', 'InteriorColorController@loadInt')->name('loadInt');
                Route::post('save', 'InteriorColorController@save')->name('save');
                Route::get('delete/{id?}', 'InteriorColorController@delete')->name('delete');
                });
                Route::name('exteriorcolor.')->prefix('exteriorcolor')->group(function () {
                Route::get('list', 'ExteriorColorController@list')->name('list');
                Route::any('load_exterior', 'ExteriorColorController@loadExt')->name('loadExt');
                Route::post('save', 'ExteriorColorController@save')->name('save');
                Route::get('delete/{id?}', 'ExteriorColorController@delete')->name('delete');
                });
                Route::name('location.')->prefix('location')->group(function () {
                Route::get('list', 'LocationController@list')->name('list');
                Route::any('load_location', 'LocationController@loadLocation')->name('loadLocation');
                Route::post('save', 'LocationController@save')->name('save');
                Route::get('delete/{id?}', 'LocationController@delete')->name('delete');
                });
                Route::name('body.')->prefix('body')->group(function () {
                Route::get('list', 'BodyController@list')->name('list');
                Route::any('load_body_type', 'BodyController@load')->name('load');
                Route::post('save', 'BodyController@save')->name('save');
                Route::get('delete/{id?}', 'BodyController@delete')->name('delete');
                });
                Route::name('fuel.')->prefix('fuel')->group(function () {
                Route::get('list', 'FuelController@list')->name('list');
                Route::any('load_fuel_type', 'FuelController@load')->name('load');
                Route::post('save', 'FuelController@save')->name('save');
                Route::get('delete/{id?}', 'FuelController@delete')->name('delete');
                });
                Route::name('brand.')->prefix('brand')->group(function () {
                Route::get('list', 'BrandController@list')->name('list');
                Route::get('add', 'BrandController@add')->name('add');
                Route::post('save', 'BrandController@save')->name('save');
                Route::get('edit/{id?}', 'BrandController@edit')->name('edit');
                Route::get('delete/{id?}', 'BrandController@delete')->name('delete');
                });
                Route::name('product.')->prefix('product')->group(function () {
                Route::get('list', 'ProductController@list')->name('list');
                Route::get('add', 'ProductController@add')->name('add');
                Route::post('save/{id?}', 'ProductController@save')->name('save');
                Route::get('edit/{id?}', 'ProductController@edit')->name('edit');
                Route::get('delete/{id?}', 'ProductController@delete')->name('delete');
                });
	});
});