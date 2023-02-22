<?php

use App\Http\Controllers\ReviewsController;
use App\Models\Review;
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

// Auth::routes();

Route::get('/', [App\Http\Controllers\Pages\HomeController::class, 'index']);
Route::get('/reviews', [App\Http\Controllers\Pages\ReviewsController::class, 'index']);
Route::post('/', [ReviewsController::class, 'store']);

Route::view('/about', 'about');
Route::view('/animators', 'animators');
Route::view('/contacts', 'contacts');
Route::view('/costs', 'costs');
Route::view('/decoration', 'decoration');
Route::view('/shows', 'shows');



Route::middleware(['auth'])->group(function () {
    Route::view('/admin', 'admin.home');
    Route::get('/admin', [App\Http\Controllers\Pages\Admin\HomeController::class, 'index']);
    Route::get('/reviews/{id}', [ReviewsController::class, 'destroy']);
});