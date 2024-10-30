<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\RoomController;
use PhpParser\Builder\Class_;
use App\Http\Controllers\Frontend\PanolroomController;

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

//Backed
Route::get('/',[HomeController::class, 'homepage']);
Route::get('/room-detial',[PanolroomController::class, 'room']);

Route::post('/room-detial/store',[PanolroomController::class, 'store'])->name('room-detial.store');
// Route::get('/room-details',[RoomController::class, 'index'])->name('room-detail.index');
// Route::post('/room-details', [RoomController::class, 'store'])->name('room-detail.store');