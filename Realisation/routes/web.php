<?php

use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\PromotionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PromotionController::class, 'index']);
Route::get('/create',[ PromotionController::class, 'create']);
Route::post('/store', [PromotionController::class, 'store']);
Route::get('/edit', [PromotionController::class, 'edit']);
Route::resource('/promotion', PromotionController::class);
Route::get('/search', [PromotionController::class, 'search'])->name('promotion.search');


//Apprenants Routes

// Route::get('/', [PromotionController::class, 'index']);
Route::get('/apprenant/create/{id}',[ ApprenantController::class, 'create']);
Route::post('/apprenant/store/{id}', [ApprenantController::class, 'store'])->name('apprenant.store');
Route::get('/apprenant.edit', [ApprenantController::class, 'edit']);
Route::resource('/apprenant', ApprenantController::class);
Route::get('/apprenant.search', [ApprenantController::class, 'search'])->name('apprenant.search');

// $promotion = Promotion::find($promotion)->first();
        
// $apprenants = $promotion->apprenants;