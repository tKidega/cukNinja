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
| copyright 2019@tkidega
|
| Route::get('/', function () {
|    return view('welcome');
| });
|
*/

// Defining default routes for the public section
Route::get('/', 'PublicRoutes@home')->name('pubHome');
Route::get('/home', 'PublicRoutes@home')->name('pubHome');
Route::get('/search', 'PublicRoutes@search')->name('search');
Route::get('/about', 'PublicRoutes@about')->name('about');
Route::get('/faq', 'PublicRoutes@faq')->name('faq');
Route::get('/legal', 'PublicRoutes@legal')->name('legal');
Route::get('/contact', 'PublicRoutes@contact')->name('contact');
Route::get('/t&c', 'PublicRoutes@tnc')->name('tnc');

// Defining default routes for VSLA/Finance sub-system
Route::get('/vsla', 'FinanceRoutes@vslaLogin')->name('vslaLogin');
Route::get('/vslaHome', 'FinanceRoutes@vslaHome')->name('vslaHome');
Route::get('/vslaUser', 'FinanceRoutes@vslaUser')->name('vslaUser');
Route::get('/vslaAdmin', 'FinanceRoutes@vslaAdmin')->name('vslaAdmin');
Route::get('/vslaSiteAdmin', 'FinanceRoutes@vslaSiteAdmin')->name('vslaSiteAdmin');

// Defining default routes for Farmer sub-system
Route::get('/farmer', 'FarmerRoutes@farmerLogin')->name('famrLogin');
Route::get('/farmerHome', 'FarmerRoutes@farmerHome')->name('famrHome');
Route::get('/farmerGuest', 'FarmerRoutes@farmerGuest')->name('famrGuest');
Route::get('/farmerAgent', 'FarmerRoutes@farmerAgent')->name('famrAgent');
Route::get('/farmerAdmin', 'FarmerRoutes@farmerAdmin')->name('famrAdmin');

// Defining defaut routes for the adverts sub-ssystem
Route::get('/adverts', 'ClassifiedsRoutes@adverts')->name('adverts');

// Defining default routes for Manager sub-system
Route::get('/manager', 'ManagerRoutes@manager')->name('mgrLogin');
Route::get('/managerHome', 'ManagerRoutes@managerHome')->name('mgrHome');
Route::get('/managerGuest', 'ManagerRoutes@managerGuest')->name('mgrGuest');
Route::get('/managerAdmin', 'ManagerRoutes@managerAdmin')->name('mgrAdmin');
Route::get('/superAdmin', 'ManagerRoutes@superAdmin')->name('superAdmin');
