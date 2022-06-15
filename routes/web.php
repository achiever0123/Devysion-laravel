<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/capabilities', [MainController::class, 'capabilities'])->name('capabilities');
Route::get('/work', [MainController::class, 'work'])->name('work');
Route::get('/events', [MainController::class, 'events'])->name('events');
Route::get('/project', [MainController::class, 'project'])->name('project');
Route::get('/team', [MainController::class, 'team'])->name('team');
Route::get('/portfolio-details/{projectId}', [MainController::class, 'portfolio']);
