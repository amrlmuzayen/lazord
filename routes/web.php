<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// الصفحات الثابتة
Route::view('/', 'pages.home')->name('home');


// صفحات من قاعدة البيانات
Route::get('/why-lazord', [FaqController::class, 'showWhyPage'])->name('why-lazord');
Route::get('/lab-services', [PageController::class, 'labServices'])->name('lab-services');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/learn', [PageController::class, 'learn'])->name('learn');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');

// نموذج التواصل
Route::post('/contact', [ContactRequestController::class, 'store'])->name('contact.store');

// تسجيل الدخول والخروج
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])
        ->middleware('throttle:5,1')
        ->name('login.store');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')->name('logout');