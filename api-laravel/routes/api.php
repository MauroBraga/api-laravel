<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

Route::get('articles', 'App\Http\Controllers\ArticleController@index');
Route::get('articles/{id}', 'App\Http\Controllers\ArticleController@show');
Route::post('articles', 'App\Http\Controllers\ArticleController@store');
Route::put('articles/{id}', 'App\Http\Controllers\ArticleController@update');
Route::delete('articles/{id}', 'App\Http\Controllers\ArticleController@delete');
