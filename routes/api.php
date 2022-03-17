<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# List Stories
Route::get('stories', [ContoController::class, 'index']);

#List single story
Route::get('story/{id}', [ContoController::class, 'show']);

# Create new story
Route::post('story', [ContoController::class, 'store']);

# Update story
Route::put('story/{id}', [ContoController::class, 'update']);

# Delete story
Route::delete('story/{id}', [ContoController::class, 'destroy']);
