<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view("homepage.index");
})->name('index');

Route::get('/apply',[StudentController::class,'apply'])->name('apply');
Route::post('/apply',[StudentController::class,'applyStore'])->name('applyStore');
Route::get('/profile',[StudentController::class,'profile'])->name('profile');

Route::prefix("admin")->group(function(){
    Route::get('/dashboard',[AdminController::class,"dashboard"])->name('admin.dashboard');
    Route::get('/students',[AdminController::class,"students"])->name('students');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
