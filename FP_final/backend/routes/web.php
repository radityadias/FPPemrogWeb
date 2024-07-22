<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\SliderController;
use App\Models\Slider;

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
    return view('frontend.PageBerita');
})->name('berita');

Route::get('/tentang-kami', function () {
    return view('frontend.tentangKami');
})->name('tentangKami');

Route::get('/footer', function () {
    return view('frontend.footer');
})->name('footer');

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

    Route::get('/dashboard/mobil', [MobilController::class, 'show'])->name('adminMobil');

    // Slider Controller
    Route::controller(SliderController::class)->group(function () {
        Route::get('dashboard/beranda', 'HomeSlider')->name('home.slide');
    });


    // Profile route
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});



Route::get('/dashboard', [PemesananController::class, 'show'])->name('dashboard');

Route::post('/', [PemesananController::class, 'store'])->name('pesanForm.store');


Route::get('/mobil/admin', [MobilController::class, 'show'])->name('adminMobil');
Route::get('/mobil/create', [MobilController::class, 'create'])->name('mobil.create');
Route::post('/mobil', [MobilController::class, 'store'])->name('mobil.store');
