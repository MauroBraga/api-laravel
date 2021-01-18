<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::middleware('auth:api')->get('articles', 'App\Http\Controllers\ArticleController@index');
Route::middleware('auth:api')->get('articles/{id}', 'App\Http\Controllers\ArticleController@show');
Route::middleware('auth:api')->post('articles', 'App\Http\Controllers\ArticleController@store');
Route::middleware('auth:api')->put('articles/{id}', 'App\Http\Controllers\ArticleController@update');
Route::middleware('auth:api')->delete('articles/{id}', 'App\Http\Controllers\ArticleController@delete');
