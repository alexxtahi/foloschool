<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ghost;

// ghost
Route::group(['prefix' => 'ghost'], function () {
    Route::get('/test', [ghost::class, 'test']);
});
