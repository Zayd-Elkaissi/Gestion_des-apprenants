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

// Route::get();

Route::controller(PromotionController::class)->group(function(){
Route::get('/', 'index');
Route::get('/promotion/create', 'create')->name('promotion.create');
Route::post('/promotion/store', 'store')->name('promotion.store');
Route::get('/promotion/edit/{id}', 'edit')->name('promotion.edit');
Route::post('/promotion/update/{id}', 'update')->name('promotion.update');
Route::get('/promotion/delete/{id}', 'destroy')->name('promotion.destroy');
// Route::resource('/promotion', PromotionController::class);
Route::get('/promotion/search', 'search')->name('promotion.search');
});



//Apprenants Routes

Route::controller(ApprenantController::class)->group(function(){
Route::get('/apprenant/create/{id}','create');
Route::post('/apprenant/store/{id?}','store')->name('apprenant.store');
Route::get('/apprenant/edit/{id}','edit');
Route::put('/apprenant/update{id}', 'update')->name('apprenant.update');
Route::get('/apprenant/delete/{id}', 'destroy')->name('apprenant.destroy');
Route::get('/apprenant.search', 'search')->name('apprenant.search');
});
