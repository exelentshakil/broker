<?php

use App\Http\Controllers\BrokerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PropertyController;
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

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

Route::name('admin.')->group(function() {
    Route::resource('properties', PropertyController::class)->middleware(['auth']);
    Route::resource('brokers', BrokerController::class)->middleware(['auth']);
});


require __DIR__.'/auth.php';
