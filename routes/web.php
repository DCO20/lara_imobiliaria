<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {

    /** Página Inicial */
Route::get('/', 'WebController@home')->name('home');
Route::get('/sobre', 'WebController@about')->name('about');
Route::get('/todos', 'WebController@all')->name('all');
Route::post('/pesquisa', 'WebController@search')->name('search');
Route::get('/contato', 'WebController@contact')->name('contact');

/** Detalhes Imoveis (venda)  */
Route::get('/imoveis/venda', 'PropertySaleController@index')->name('sale');
Route::get('/imoveis/venda/{slug}/detalhes', 'PropertySaleController@detailsSale')->name('sale.details');

/** Detalhes Imoveis (locação)  */
Route::get('/imoveis/alugar', 'PropertyRentController@index')->name('rent');
Route::get('/imoveis/alugar/{slug}/detalhes', 'PropertyRentController@detailsRent')->name('rent.details');

/** Blog  */
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{slug}/detalhes', 'BlogController@detailsBlog')->name('blog.details');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
