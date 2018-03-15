<?php


Route::get('/','HomeController@index');
Route::get('/inicio','HomeController@index');
Route::get('/home','HomeController@index');
Route::get('/produtos','produtosController@lojavirtual');
Route::get('/produto','produtosController@produto');
Route::get('/blog','blogController@index');
Route::get('/single','blogController@single');
Route::get('/contato','contatoController@index');
Route::get('/perfil','PerfilController@perfil');
Route::get('/checkout','CheckoutController@index');
