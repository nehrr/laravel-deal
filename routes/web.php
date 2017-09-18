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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/annonce/show/{categorie}', 'CategorieController@show')->name('categorie.show');
Route::get('/categories', 'CategorieController@index')->name('categorie.index');
Route::get('/categorie/show/{categorie}', 'CategorieController@show')->name('categorie.show');
Route::post('/categorie/store', 'CategorieController@store')->name('categorie.store');
Route::get('/categorie/remove/{categorie}', 'CategorieController@destroy')->name('categorie.remove');
Route::get('/categorie/edit/{categorie}', 'CategorieController@edit')->name('categorie.edit');
Route::post('/categorie/update/{categorie}', 'CategorieController@update')->name('categorie.update');

Route::get('/membres', 'UserController@index')->name('membre.index');
Route::get('/membre/show/{membre}', 'UserController@show')->name('membre.show');
Route::post('/membre/store', 'UserController@store')->name('membre.store');
Route::get('/membre/remove/{membre}', 'UserController@destroy')->name('membre.remove');
Route::get('/membre/edit/{membre}', 'UserController@edit')->name('membre.edit');
Route::post('/membre/update/{membre}', 'UserController@update')->name('membre.update');

Route::get('/notes', 'NoteController@index')->name('note.index');
Route::get('/note/show/{note}', 'NoteController@show')->name('note.show');

Route::get('/commentaires', 'CommentaireController@index')->name('commentaire.index');
Route::get('/commentaire/show/{commentaire}', 'CommentaireController@show')->name('commentaire.show');

Route::get('/annonces', 'AnnonceController@index')->name('annonce.index');
Route::get('/annonce/show/{annonce}', 'AnnonceController@show')->name('annonce.show');
Route::get('/annonce/remove/{annonce}', 'AnnonceController@destroy')->name('annonce.remove');
Route::get('/annonce/edit/{annonce}', 'AnnonceController@edit')->name('annonce.edit');
Route::post('/annonce/update/{annonce}', 'AnnonceController@update')->name('annonce.update');

Route::middleware('auth')->group(function() {
    
});
