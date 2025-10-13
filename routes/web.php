<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('home_page');
Route::get('/services', [SiteController::class, 'services'])->name('services_page');
Route::get('contact', [SiteController::class, 'contact'])->name('contact_page');
