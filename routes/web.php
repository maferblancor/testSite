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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/test/save', ['as' => 'save-date',
                           'uses' => 'DateController@showDate', 
                            function () {
                                return '';
                            }]);


Route::get('/module1', function () {
    return view('module1');
});


Route::get('/module2', function () {
    return view('module2');
});

Route::get('/module3', function () {
    return view('module3');
});


Route::get('/test/datepicker', function () {
    return view('datepicker');
});

Route::get('/formulario','FormularioController@create');
Route::post('/formulario','FormularioController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


