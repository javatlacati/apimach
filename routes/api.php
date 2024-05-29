<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CellDetailsController;
use App\Http\Controllers\CellLocationController;
use App\Http\Controllers\GroupedCityController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);

Route::resource('users', UserController::class);

Route::resource('authors', AuthorController::class);

Route::resource('books', BookController::class);

Route::get('/booksbyauthor', [BookController::class,'showBookByAuthorName']);
Route::get('/booksbytitle', [BookController::class,'showBookByTitle']);

Route::resource('cell_details', CellDetailsController::class);

Route::resource('cell_locations', CellLocationController::class);

Route::resource('grouped_cities', GroupedCityController::class);

Route::resource('items', ItemController::class);
