<?php

use App\Http\Controllers\Math\HashFunctionsController;
use Illuminate\Support\Facades\Route;




Route::prefix('hash-functions')->group(function () {
    
    Route::get('/', [HashFunctionsController::class, 'index'])->name('hashfunctions');

});
