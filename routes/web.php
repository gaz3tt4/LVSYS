<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
<<<<<<< HEAD
   return viw ('index');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
=======
    return view('contrato');
})->middleware(['auth', 'verified'])->name('contrato');
>>>>>>> 317f1f1bdbf32cdeb1af213fa6e188b471ceaa92

// Route::middleware('auth')->group(function () {
//     Route::get('/index', [ProfileController::class, 'index'])->name('index');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
