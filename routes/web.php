<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shipment\Contoller;

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
    return view('auth.login');
});

Route::get('/dashboard', [Contoller::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/create', function(){
    return view('shipment.create');
})->middleware(['auth'])->name('create');

Route::post('saveshipment', [Contoller::class, 'save'])->middleware(['auth'])->name('saveshipment');

require __DIR__.'/auth.php';
