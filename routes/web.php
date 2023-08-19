<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CookieController;

Route::get('/add-cookie-v1', [CookieController::class, 'addBrowserCookieVersi1']);
Route::get('/add-cookie-v2', [CookieController::class, 'addBrowserCookieVersi2']);
Route::get('/get-cookie', [CookieController::class, 'getBrowserCookie']);
Route::get('/delete-cookie', [CookieController::class, 'deleteBrowserCookie']);
