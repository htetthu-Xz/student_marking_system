<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarkCalculationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group([
    'middleware' => 'guest:web',
    'as' => 'user.',
], function () {
    Route::get('/', [MarkCalculationController::class, 'index'])->name('get.calculationForm');
    Route::post('/store', [MarkCalculationController::class, 'store'])->name('store.calculation');
});
