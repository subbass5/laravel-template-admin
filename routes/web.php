<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductTypesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => 'users',
], function () {
    Route::get('/', 'App\Http\Controllers\UsersController@index')
         ->name('users.users.index');
    Route::get('/create','App\Http\Controllers\UsersController@create')
         ->name('users.users.create');
    Route::get('/show/{users}','App\Http\Controllers\UsersController@show')
         ->name('users.users.show');
    Route::get('/{users}/edit','App\Http\Controllers\UsersController@edit')
         ->name('users.users.edit');
    Route::post('/', 'App\Http\Controllers\UsersController@store')
         ->name('users.users.store');
    Route::put('users/{users}', 'App\Http\Controllers\UsersController@update')
         ->name('users.users.update');
    Route::delete('/users/{users}','App\Http\Controllers\UsersController@destroy')
         ->name('users.users.destroy');
});

