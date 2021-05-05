<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\ShowtasksController;
use App\Http\Controllers\DeletetaskController;
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

Route::get('/', [TaskController::class, 'index']);
Route::get('/tasks/{task}', [ShowtasksController::class, 'show']);
Route::get('/tasks/{task}/delete', [DeletetaskController::class, 'delete']);
Route::get('/ordinate', [TaskController::class, 'ordinate']);

