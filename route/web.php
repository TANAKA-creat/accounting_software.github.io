<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;

Route::get('/', [DetailController::class, 'index'])
 ->name('details.index');

Route::get('/details', [DetailController::class, 'show'])
 ->name('details.show');

Route::get('/details/create', [DetailController::class, 'create'])
 ->name('details.create')
 ->where('detail','[0-9]+');

Route::post('/details/store', [DetailController::class, 'store'])
 ->name('details.store')
 ->where('detail','[0-9]+');
