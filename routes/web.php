<?php

use App\Http\Controllers\BossController;
use App\Http\Controllers\JefeController;
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

Route::get('/jefe', [JefeController::class, 'index']);

Route::get('/boss', [BossController::class, 'index']);
