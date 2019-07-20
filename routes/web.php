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

// Defining default routes for the public section sub-system
Route::get('/', 'PublicRoutes@home');
Route::get('/home', 'PublicRoutes@home');
Route::get('/search', 'PublicRoutes@search');
Route::get('/about', 'PublicRoutes@about');
Route::get('/faq', 'PublicRoutes@faq');
Route::get('/legal', 'PublicRoutes@legal');
Route::get('/contact', 'PublicRoutes@contact');
Route::get('/t&c', 'PublicRoutes@tnc');

// Defining default routes for cukNinja Finance sub-system
Route::get('/vsla', 'FinanceRoutes@vslaLogin');
Route::get('/vslaHome', 'FinanceRoutes@vslaHome');
Route::get('/vslaUser', 'FinanceRoutes@vslaUser');
Route::get('/vslaAdmin', 'FinanceRoutes@vslaAdmin');
Route::get('/vslaSiteAdmin', 'FinanceRoutes@vslaSiteAdmin');

// Defining default routes for cukNinja Farmer sub-system
Route::get('/farmer', 'FarmerRoutes@farmerLogin');
Route::get('/farmerHome', 'FarmerRoutes@farmerHome');
Route::get('/farmerGuest', 'FarmerRoutes@farmerGuest');
Route::get('/farmerAgent', 'FarmerRoutes@farmerAgent');
Route::get('/farmerAdmin', 'FarmerRoutes@farmerAdmin');

// Defining defaut routes for the system adverts sub-ssystem
Route::get('/adverts', 'ClassifiedsRoutes@adverts');

// Defining default routes for cukNinja Manager sub-system
Route::get('/manager', 'ManagerRoutes@manager');
Route::get('/managerHome', 'ManagerRoutes@managerHome');
Route::get('/managerGuest', 'ManagerRoutes@managerGuest');
Route::get('/managerAdmin', 'ManagerRoutes@managerAdmin');
Route::get('/superAdmin', 'ManagerRoutes@superAdmin');
