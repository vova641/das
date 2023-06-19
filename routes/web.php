<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeworkController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/homework', [HomeworkController::class, 'index'])->name('homework');
    Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
});
Route::get('{post:slug}', [PostController::class, 'show'])->name('view');
Route::get('/category/{category:slug}', [PostController::class, 'byCategory'])->name('by-category');
