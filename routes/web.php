<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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

Route::post('/books', [BookController::class, 'store']);
Route::patch('/books/{book}-{title}', [BookController::class, 'update']);
Route::delete('/books/{book}-{title}', [BookController::class, 'destroy']);

Route::post('/authors', [AuthorController::class, 'store']);
