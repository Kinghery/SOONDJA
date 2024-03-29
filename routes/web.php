<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'Kontol']);
Route::get('/taufik', [HomeController::class, 'Pepek']);
Route::get('/hery', [HomeController::class, 'silit']);
Route::get('/alvin', [HomeController::class, 'herygay']);
