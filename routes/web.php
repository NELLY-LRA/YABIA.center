<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/service-detail', function () {
    return view('service-detail');
})->name('service-detail');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::resource('services', ServiceController::class);
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

Route::post('/sendmail',[ContactController::class,'send'])->name('contact.send');
Route::get('/search', [SearchController::class, 'index'])->name('search');


Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        Session::put('locale', $locale);
    }

    return redirect()->back();
}
);


Auth::routes();

