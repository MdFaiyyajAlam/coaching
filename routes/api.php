<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAPIController;
//use App\Http\Controllers\StudentController;

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

Route::get("/students/list",[StudentAPIController::class,"fetch"]);
Route::post("insert/",[StudentAPIController::class,"create"]);
Route::delete('/students/{id}',[StudentAPIController::class,"delete"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
