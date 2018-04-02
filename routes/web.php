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

Route::get('/', 'AuthorController@listAuthors')
    ->name('authors.list');
Route::get('/authors/{id}', 'AuthorController@viewAuthor')
    ->where('id', '[\d]+')
    ->name('authors.view');
