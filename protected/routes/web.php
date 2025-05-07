<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
//
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
//
use Illuminate\Support\Facades\Route;


// Uji Coba
Route::get('/', function () {
    return view('dashboard');
});

// Define a named route for dashboard
//Route::get('/', function () {
    //$totalBuku = Book::count();
    //$totalKategori = Category::count();
    //$totalUser = User::count();
    //return view('dashboard', compact('totalBuku', 'totalKategori', 'totalUser'));
//})->middleware('admin')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('books', BookController::class)->middleware('admin');
Route::resource('categories', CategoryController::class)->middleware('admin');

require __DIR__.'/auth.php';
