<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Customer.....................
    Route::get('/customer', [CustomerController::class, 'index'])->name('dashboard.customer.index');
    Route::get('/customer/add', [CustomerController::class, 'add'])->name('add.customer');
    Route::post('/customer/add', [CustomerController::class, 'add_customer'])->name('add_customer_post');
    Route::post('/customer/delete/{id}', [CustomerController::class, 'delete_customer'])->name('delete.customer');
});

require __DIR__.'/auth.php';
