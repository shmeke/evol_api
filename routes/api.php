<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/players', [PlayerController::class, 'index']);
Route::post('/players', [PlayerController::class, 'store']);
Route::get('/players/{player}', [PlayerController::class, 'show']);
Route::get('/player/{email}', [PlayerController::class, 'getByEmail']);
Route::put('/players/{player}', [PlayerController::class, 'update']);
Route::delete('/players/{player}', [PlayerController::class, 'destroy']);

Route::get('/chat', [ChatController::class, 'index']);
Route::post('/chat', [ChatController::class, 'store']);
Route::get('/chat/{chat}', [ChatController::class, 'show']);
Route::put('/chat{chat}', [ChatController::class, 'update']);
Route::delete('/chat{chat}', [ChatController::class, 'destroy']);

Route::get('/chatmessage', [ChatMessageController::class, 'index']);
Route::post('/chatmessage', [ChatMessageController::class, 'store']);
Route::get('/chatmessage/{chatmessage}', [ChatMessageController::class, 'show']);
Route::put('/chatmessage{chatmessage}', [ChatMessageController::class, 'update']);
Route::delete('/chatmessage{chatmessage}', [ChatMessageController::class, 'destroy']);