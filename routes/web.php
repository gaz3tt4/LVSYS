<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })
Route::get('/', function () {
    return view('index');
})-> name('index') -> middleware('auth');
Route::get('/contrato', function () {
    return view('contrato');
})-> name('contrato')-> middleware('auth');
Route::get('/welcome', function () {
    return view('welcome');
})-> name('welcome')-> middleware('auth');

Route::get('/galery', function () {
    return view('galery');
})-> name('galery')-> middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/galery', [ProfileController::class, 'index'])->name('galery.index');
    Route::post('/galeryInsert', [ProfileController::class, 'store'])->name('galery.store');
    Route::get('/galeryDelete/{id}', [ProfileController::class, 'destroy'])->name('galery.destroy');
});



Route::middleware('auth')->group(function () {
    Route::get('/index', [ProfileController::class, 'index'])->name('index');
    Route::get('/welcome', [ProfileController::class, 'index'])->name('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
