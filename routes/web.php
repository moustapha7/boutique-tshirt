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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('home');
});

Route::get('/','Shop\MainController@index')->name('homepage');
Route::get('/produit/{id}','Shop\MainController@produit')->name('detailProduit');

Route::get('/categorie/{id}','Shop\MainController@viewByCategory')->name('voir_produit_par_cate');