<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [postController::class , 'index'])->name('index');
Route::get("/student", [postController::class , 'student'])->name('student');
Route::get("/supervisor", [postController::class , 'supervisor'])->name('supervisor');
