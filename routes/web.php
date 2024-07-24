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
    Route::get('/', [MarkCalculationController::class, 'index'])->name('user.get.calculationForm');
    Route::post('/store', [MarkCalculationController::class, 'store'])->name('user.store.calculation');
    Route::get('students/{student}/get-grading-list', [MarkCalculationController::class, 'getGrading'])->name('user.get.grading');

