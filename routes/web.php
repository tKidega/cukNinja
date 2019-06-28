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
|copyright 2019@tkidega
*/

Route::get('/', function () {
    return view('welcome');
});

// Defining default routes for the public section sub-system

Route::get('/home', function () {
    return view('genHappiness/index');
});

Route::get('/search', function () {
    return view('genHappiness/pub_search');
});

Route::get('/about', function () {
    return view('genHappiness/pub_about');
});

Route::get('/contact', function () {
    return view('genHappiness/pub_contact');
});

// Defining default routes for cukNinja Finance sub-system

Route::get('/financeLogin', function () {
    return view('finance/index');
});

Route::get('/financeHome', function () {
    return view('finance/vsla_home');
});

Route::get('/vslaUser', function () {
    return view('finance/vsla_user');
});

Route::get('/vslaAdmin', function () {
    return view('finance/vsla_admin');
});

Route::get('/vslaSiteAdmin', function () {
    return view('finance/site_admin');
});

// Defining default routes for cukNinja Farmer sub-system

Route::get('/farmerLogin', function () {
    return view('farmer/index');
});

Route::get('/farmerHome', function () {
    return view('farmer/farm_home');
});

Route::get('/farmUser', function () {
    return view('farmer/farm_guest');
});

Route::get('/farmAgent', function () {
    return view('farmer/farm_agent');
});

Route::get('/farmAdmin', function () {
    return view('farmer/farm_admin');
});

// Defining default routes for cukNinja Manager sub-system

Route::get('/managerLogin', function () {
    return view('manager/index');
});

Route::get('/managerHome', function () {
    return view('manager/mgr_home');
});

Route::get('/managerGuest', function () {
    return view('manager/mgr_guest_admin');
});

Route::get('/managerAdmin', function () {
    return view('manager/mgr_site_admin');
});

Route::get('/superAdmin', function () {
    return view('manager/mgr_super_admin');
});
