<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/artists', [ArtistController::class, 'index']);
Route::get('/artists/filter/status/{status}', [ArtistController::class, 'filterByStatus'])->whereIn('status', ['active', 'inactive']);
Route::get('/artists/filter/email/{email}', [ArtistController::class, 'filterByEmail']);
