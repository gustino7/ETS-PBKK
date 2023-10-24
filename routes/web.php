<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/form', function () {
    return view('form');
})->middleware(['auth', 'verified'])->name('form');
// Route::get('/form', [FormController::class, 'form'])->middleware(['auth', 'verified'])->name('form');

Route::post('/form', [FormController::class, 'add'])->middleware(['auth', 'verified']);

Route::get('/getProduct', [FormController::class, 'get'])->name('getProduct')->middleware(['auth', 'verified']);

Route::get('/edit/{id}', [FormController::class,'edit'])->middleware(['auth', 'verified']);
Route::put('/edit/{id}', [FormController::class,'update'])->middleware(['auth', 'verified']);

Route::get('/delete/{id}', [FormController::class,'delete'])->middleware(['auth', 'verified']);
Route::delete('/delete/{id}', [FormController::class,'destroy'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
