<?php

use App\Http\Livewire\Category\Category;
use App\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/category', Category::class)->name('category');
});

require __DIR__ . '/auth.php';
