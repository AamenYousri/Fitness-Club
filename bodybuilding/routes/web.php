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




Route::get('/', "PagesController@index");
Route::get('/articles', "ArticlesController@articles");
Route::get('/programs', "PagesController@programs");
Route::get('/nutrition', "PagesController@nutrition");
Route::get('/motivation', "PagesController@motivation");
Route::get('/contactus', "PagesController@contactus");



Route::get('/articles/create', "ArticlesController@create");
Route::post('/articles', "ArticlesController@store");
Route::get('/articles/{id}', "ArticlesController@show");


Route::get('/articles/{id}/edit', "ArticlesController@edit");
Route::put('/articles/{id}', "ArticlesController@update");


Route::delete('/articles/{id}', "ArticlesController@delete")->name('articles.delete');


Route::get('/messages', 'MessagesController@display');
Route::get('/messages/{id}', "MessagesController@show");
Route::post('/messages', "MessagesController@store");
Route::delete('/messages/{id}', "MessagesController@delete")->name('message.delete');

Route::get('/programs/bulking' , 'ProgramsController@bulking');
Route::get('/programs/calisthenics' , 'ProgramsController@calisthenics');
Route::get('/programs/getfit' , 'ProgramsController@getfit');
Route::get('/programs/powerlifting' , 'ProgramsController@powerlifting');
Route::get('/programs/women' , 'ProgramsController@women');
Route::get('/programs/abs' , 'ProgramsController@abs');
Route::get('/programs/shredding' , 'ProgramsController@shredding');

Route::get('/programs/add', 'ProgramsController@addprogram');
Route::post('/programs', "ProgramsController@storeprogram");
Route::delete('/programs/{id}', "ProgramsController@delete")->name('program.delete');


Route::post('/search' , 'SearchController@search');



Auth::routes();

