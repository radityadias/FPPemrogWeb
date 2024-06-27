<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MobilController;

// Public routes

// FRONTEND
Route::get('/', function () {
    return view('frontend.beranda');
})->name('beranda');

Route::get('/pemesanan', function () {
    return view('frontend.pemesanan');
})->name('pemesanan');

Route::get('/mobil', function () {
    return view('frontend.mobil');
})->name('mobil');

Route::get('/berita', function () {
    return view('frontend.berita');
})->name('berita');

Route::get('/tentang-kami', function () {
    return view('frontend.tentangkami');
})->name('tentangKami');

Route::get('/footer', function () {
    return view('frontend.footer');
})->name('footer');

// Backend

Route::get('/dashboard/mobil', function () {
    return view('MobilEdit.admin-mobil');
})->name('admin-mobil');

// Authentication routes
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Mobil routes
    Route::prefix('mobils')->controller(MobilController::class)->group(function () {
        Route::get('', 'index')->name('mobils.index');
        Route::get('create', 'create')->name('mobils.create');
        Route::post('store', 'store')->name('mobils.store');
        Route::get('show/{id}', 'show')->name('mobils.show');
        Route::get('edit/{id}', 'edit')->name('mobils.edit');
        Route::put('edit/{id}', 'update')->name('mobils.update');
        Route::delete('destroy/{id}', 'destroy')->name('mobils.destroy');
    });

    // Profile route
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});
