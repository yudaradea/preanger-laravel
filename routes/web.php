<?php

use App\Livewire\Backend\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');

Route::get('/program', function () {
    return view('frontend.pages.program');
})->name('program');

Route::get('/team', function () {
    return view('frontend.pages.team');
})->name('team');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/program/{id}', function () {
    return view('frontend.pages.single-program');
})->name('single-program');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::get('about', function () {
            return view('backend.pages.about');
        })->name('about');
        Route::get('users', Users::class)->middleware('role:admin')->name('users');
    });
});
