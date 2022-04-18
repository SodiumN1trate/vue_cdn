<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FileController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('/user', [AuthController::class, 'user'])->middleware('auth:api');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/user/upload_file', [FileController::class, 'uploadFile'])->middleware('auth:api');
Route::get('/user/get_file', [FileController::class, 'getFile'])->middleware('auth:api');
