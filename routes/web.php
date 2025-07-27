<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('/pages/home');
});

Route::get('/service', function () {
    return view('/pages/service');
});

Route::get('/about-us', function () {
    return view('/pages/about');
});

Route::get('/contact', function () {
    return view('/pages/contact');
});



Route::get('/property', [PageController::class, 'property']);
Route::get('/rental', [PageController::class, 'rent'])->name('pages.rent');
Route::get('/artikel', [PageController::class, 'articles'])->name('pages.articles');

Route::get('articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('properties/{id}', [PropertyController::class, 'show'])->name('properties.show');
Route::get('rents/{id}', [rentController::class, 'show'])->name('rents.show');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('rents', RentController::class)->except('show');
    Route::resource('articles', ArticleController::class)->except(['show']);
    Route::resource('properties', PropertyController::class)->except(['show']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // atau arahkan ke halaman landing kamu
})->name('logout');

Route::get('/rents/filter/{type}', [RentController::class, 'filter'])->name('rents.filter');



