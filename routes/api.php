<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('items', ItemController::class);
/*
Route::get('/items', [ItemController::class,'index']);
Route::post('/items', [ItemController::class,'store']);
Route::get('/items/{Item}', [ItemController::class, 'show']);
Route::put('/items/{Item}', [ItemController::class, 'update']);
Route::delete('/items/{Item}', [ItemController::class, 'destroy']);
*/

