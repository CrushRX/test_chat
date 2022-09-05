<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post("/message/create",[\App\Http\Controllers\ChatController::class,"create"]);
Route::delete("/message/delete",[\App\Http\Controllers\ChatController::class,"delete"]);
Route::get("/message/list",[\App\Http\Controllers\ChatController::class,"list"]);

