<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Auth\InventarisAPIController;


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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::prefix('inventaris')->group(function () {
    Route::get('/view', [InventarisAPIController::class, 'InventarisView']);
    Route::post('/add', [InventarisAPIController::class, 'InventarisAdd']);
    Route::put('/update/{id}', [InventarisAPIController::class, 'InventarisUpdate']);
    Route::delete('/delete/{id}', [InventarisAPIController::class, 'InventarisDelete']);
});
