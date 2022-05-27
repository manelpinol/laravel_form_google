<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Register1Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('register1', [Register1Controller::class, 'create']);
Route::post('register1', [Register1Controller::class, 'store']);

