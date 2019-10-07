<?php

/*
|--------------------------------------------------------------------------|
| Web Routes                                                               |
|--------------------------------------------------------------------------|
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');
Route::view('contact', 'contact');
Route::view('a-propos', 'a-propos');


Route::get('/salut/{name}', function ($name) {
 return "Salut $name";
});

Route::get('/clients', function () {
    return view('clients.index');
});

/*
Route::get('/clients', function () {
    $clientsMock = [
    'Jean1',
    'Marc1',
    'Virginie1',
    ];
    return view('clients.index', [
    'clients' => $clientsMock
    ]);
});
*/

Route::get('/clients', 'ClientsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/clients', 'ClientsController@store');

Route::get('/clients/{client}', 'ClientsController@show');
