<?php

use App\Http\Controllers\AnonymousBodyDataController;
use App\Http\Controllers\BodyDataController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user/{id}', function ($id) {
    $user = User::find($id);
    return response()->json($user);
});

Route::post('/bodyInfo', [BodyDataController::class, 'create']);
Route::get('/bodyInfo/{id}', [BodyDataController::class, 'view']);
Route::post("/anonymousBodyInfo", [AnonymousBodyDataController::class, "create"]);
