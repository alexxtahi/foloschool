<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ghost;

// ghost
Route::group(['prefix' => 'ghost'], function () {
    Route::post('/test', [ghost::class, 'test']);
    Route::post('/events', [ghost::class, 'events']);
});
