<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PromoCodeController;
use App\Http\Controllers\MobileAppController;
use App\Http\Middleware\LocaleMiddleware;
use App\Helpers\Language;

Route::prefix(Language::getLocale())->middleware([LocaleMiddleware::class])->group(function () {

    Route::get('/', [DashboardController::class, 'create'])->name('index');

    Route::get('/bookmakers/{key}', [ReviewController::class, 'create'])->name('review');

    Route::get('/promo-code/{key}', [PromoCodeController::class, 'create'])->name('promocode');

    Route::get('/mobile-app/{key}', [MobileAppController::class, 'create'])->name('mobileapp');

});

Route::post('/rate', [RatingController::class, 'store']);









