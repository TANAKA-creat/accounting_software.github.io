<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CreditController;

Route::get('/', [DetailController::class, 'index'])
 ->name('details.index');

// details route
Route::get('/details', [DetailController::class, 'show'])
 ->name('details.show');

Route::get('/details/create', [DetailController::class, 'create'])
 ->name('details.create')
 ->where('detail','[0-9]+');

Route::post('/details/store', [DetailController::class, 'store'])
 ->name('details.store')
 ->where('detail','[0-9]+');

// credits route
 Route::get('/credits', [CreditController::class, 'show2'])
 ->name('credits.show2');

Route::get('/credits/create2', [CreditController::class, 'create2'])
 ->name('credits.create2')
 ->where('credit','[0-9]+');

Route::post('/credits/store2', [CreditController::class, 'store2'])
 ->name('credits.store2')
 ->where('credit','[0-9]+');
