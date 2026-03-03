<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', [\App\Http\Controllers\GitRepositoryController::class, 'index'])->name('welcome');
Route::get('/ancestors', [\App\Http\Controllers\AncestorController::class, 'index'])->name('ancestors.index');


/// dashboard

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
/// dashboard


// dashboard/ancestors
Route::middleware('auth')->group(function () {
    Route::get('/dashboard/ancestors', [\App\Http\Controllers\AncestorController::class, 'dashboardIndex'])->name('dashboard.ancestors.index');
    Route::get('/dashboard/ancestors/create', [\App\Http\Controllers\AncestorController::class, 'create'])->name('dashboard.ancestors.create');
    Route::post('/dashboard/ancestors', [\App\Http\Controllers\AncestorController::class, 'store'])->name('dashboard.ancestors.store');
    Route::get('/dashboard/ancestors/{ancestor}/edit', [\App\Http\Controllers\AncestorController::class, 'edit'])->name('dashboard.ancestors.edit');
    Route::put('/dashboard/ancestors/{ancestor}', [\App\Http\Controllers\AncestorController::class, 'update'])->name('dashboard.ancestors.update');
    Route::delete('/dashboard/ancestors/{ancestor}', [\App\Http\Controllers\AncestorController::class, 'destroy'])->name('dashboard.ancestors.destroy');
}); // dashboard/ancestors

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
