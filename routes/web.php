<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Shipment\ShipmentController;
use App\Http\Controllers\Shipment\TrackingController;

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

Route::get('/', [MainController::class, 'index'])->middleware(['auth'])->name('/');

Route::get('dashboard', [ShipmentController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('create', [ShipmentController::class, 'create'])->middleware(['auth'])->name('create');
Route::get('edit', [ShipmentController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::get('delete', [ShipmentController::class, 'delete'])->middleware(['auth'])->name('delete');
Route::post('saveshipment', [ShipmentController::class, 'save'])->middleware(['auth'])->name('saveshipment');

Route::get('tracking', [TrackingController::class, 'index'])->middleware(['auth'])->name('tracking');
Route::post('getTrack', [TrackingController::class, 'getTrack'])->middleware(['auth'])->name('getTrack');

require __DIR__.'/auth.php';
