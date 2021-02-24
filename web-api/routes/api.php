<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'library'], function() {
    Route::get('books', ['uses' => 'App\Http\Controllers\BookController@getBooks']);
    Route::get('book/{id}', ['uses' => 'App\Http\Controllers\BookController@getBook']);
});

