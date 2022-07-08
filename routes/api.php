<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CarAPIController;
use App\Http\Controllers\API\ProducerController;
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

Route::get('producer',[ProducerController::class,'index']);
// Route::apiResource('cars', CarAPIController::class);
// Route::group([
//     'middleware' => ['api', 'Cors'],
//     // 'namespace' => $this->namespace,
//     'prefix' => 'api',
// ], function ($router) {
//     Route::apiResource('cars', CarAPIController::class);
// });
// Route::get('cars', [CarAPIController::class, 'index'])->middleware('cors');
// Route::group(
//     [ 'middleware' => ['cors']]
//     , function ($router) {
//        ;
// });
// Route::apiResource('cars', CarAPIController::class)->middleware('cors');
// Route::apiResource('cars', CarAPIController::class);


Route::middleware(['cors'])->group(function () {
    Route::post('cars', [CarAPIController::class, 'store']);
    Route::get('cars', [CarAPIController::class, 'index']);
});


// Route::post('cars', [CarAPIController::class, 'store']);
