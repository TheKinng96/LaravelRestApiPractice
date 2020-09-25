<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;

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

Route::resource('/class', SclassController::class);
Route::resource('/subject', SubjectController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
