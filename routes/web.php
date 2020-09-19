<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroceriesController;

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

Route::get('/groceries', 'GroceriesController@index')->name('groceries.index');

Route::get('/groceries/create', 'GroceriesController@index')->name('groceries.create');

Route::post('/groceries', 'GroceriesController@index')->name('groceries.store');

Route::get('/groceries/{grocery}/edit', 'GroceriesController@index')->name('groceries.edit');

Route::put('/groceries/{grocery}', 'GroceriesController@index')->name('groceries.update');

Route::delete('/groceries/{grocery}', 'GroceriesController@index')->name('groceries.destroy');

Route::redirect('/', '/groceries');