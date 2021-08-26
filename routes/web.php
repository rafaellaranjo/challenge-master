<?php

use App\Http\Controllers\HintController;
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


Route::get('/create', [HintController::class, 'create'])
    ->middleware('auth')
    ->name('create');

Route::post('/create', [HintController::class, 'store'])
    ->middleware('auth');

Route::get('/', [HintController::class, 'index'])
    ->middleware(['web'])->name('dashboard');

require __DIR__.'/auth.php';
