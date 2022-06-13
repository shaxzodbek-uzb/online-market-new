<?php

use OnlineMarket\Controllers\Front\ProductController;
use Illuminate\Support\Facades\Route;
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('/products', ProductController::class);
});

Route::view('/hello-from-package', 'online-market::front.index');