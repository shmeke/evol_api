<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\authController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatMessageController;
use App\Http\Controllers\PlayerDetailsController;
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

Route::post('/register', [authController::class, 'register']);
Route::post('/login', [authController::class, 'login']);

Route::middleware('auth:sanctum')->group(function() {
    Route::post('/logout', [authController::class, 'logout']);
    Route::get('/user', [authController::class, 'user']);
});



Route::get('/chat', [ChatController::class, 'index']);
Route::post('/chat', [ChatController::class, 'store']);
Route::get('/chat/{player}', [ChatController::class, 'show']);
Route::delete('/chat{chat}', [ChatController::class, 'destroy']);

Route::get('/chatmessage', [ChatMessageController::class, 'index']);
Route::post('/chatmessage', [ChatMessageController::class, 'store']);
Route::get('/chatmessage/{chatmessage}', [ChatMessageController::class, 'show']);   

Route::get('/playerdetails', [PlayerDetailsController::class, 'index']);
Route::post('/playerdetails', [PlayerDetailsController::class, 'store']);
Route::get('/playerdetails/{player}', [PlayerDetailsController::class, 'show']);
Route::get('/playerdetails/{player}', [PlayerDetailsController::class, 'updateMatches']);
Route::put('/playerdetails/{player}', [PlayerDetailsController::class, 'update']);
Route::delete('/playerdetails/{player}', [PlayerDetailsController::class, 'destroy']);