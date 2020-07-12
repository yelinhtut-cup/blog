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
//Route::get('/home','CustomerController@home');
//Route::post('/useradd','CustomerController@add');
Route::get('/post','PostController@index');
//Route::get('post/create',"PostController@create");
//Route::post('/post','PostController@store');//PostController ka store function ko point
Route::get('/test','TestController@index');
Route::post('/test','TestController@store');
Route::get('/review','ViewController@index');
Route::post('/review','ViewController@store');
//Route::get('/post/{id}','PostController@show');
//Route::get('/post/{id}/edit','PostController@edit');
//Route::patch('/post/{post}','PostController@update');
//Route::delete('/post/{post}','PostController@destroy');
Route::resource('/post','PostController');

//Customer
Route::get('/customers','CustomerController@create');
Route::post('/customers','CustomerController@store');
//Route::post('/customer','CustomerController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    return view('test');
});

