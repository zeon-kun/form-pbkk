<?php

use App\Http\TA\Presentation\Controller\PenggunaController;
use Illuminate\Support\Facades\Route;

Route::prefix('pengguna')->group(function () {
    Route::post('create', [TopikController::class, 'createPengguna']);
    Route::post('update', [TopikController::class, 'updatePengguna']);
});
