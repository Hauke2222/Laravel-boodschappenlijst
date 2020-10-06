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

// onderstaande route is dubbel (overbodig)
Route::get('groceries/{grocery}/edit', [
    'as' => 'groceries.edit'
]);
Route::resource('groceries', 'App\Http\Controllers\GroceriesController');

Route::redirect('/', '/groceries'); // netjes!
