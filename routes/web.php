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

Route::view('/', 'home')->name('home');
Route::get('/home', 'HomeController@index');
Route::view('presentacion', 'presentation')->name('presentation');
Route::view('ayuda', 'help')->name('help');
Route::view('contactos', 'contact')->name('contact');
Route::view('propuesta', 'proposal')->name('proposal');
// Route::resource('propuesta', 'ProposalController')->names('proposals')->parameters(['propuesta' => 'proposal']);
Auth::routes();

