<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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

//Route::get('/', [TodoController::class, 'welcome']);
//
//Route::post('/', [TodoController::class, 'insert']);
//
//Route::get('/', [TodoController::class, 'showAll']);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/insert', function () {
    return view('insert ');
})->name('insert');

Route::get('/update', function () {
    return view('update');
})->name('update');

Route::post('/insert/submit', [TodoController::class, 'insert'])->name('inserting');

Route::get('/select/all', [TodoController::class, 'showAll'])->name('showAll');
Route::get('/select/all/{id}', [TodoController::class, 'showOne'])->name('one');

Route::get('/select/all/{id}/update',
    [TodoController::class, 'updateTask']
)->name('updateOne');
Route::post( '/select/all/{id}/update',
    [TodoController::class, 'updateTaskSubmit']
)->name('updateOne-submit');

Route::get('/select/all/{id}/delete',
    [TodoController::class, 'deleteTask']
)->name('deleteOne');
