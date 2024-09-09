<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;


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

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::post('/contacts/thanks', [ContactController::class, 'thanks']);

Route::get('/', [AuthController::class, 'admin']);
Route::get('/', [LoginController::class, 'admin']);

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});
Route::get('/', [AuthController::class, 'admin']);


Route::get('/admin', [ContactController::class, 'contact']);
Route::get('/index', [AdminController::class, 'add']);
Route::get('/', [AdminController::class, 'add']);
Route::post('/', [AdminController::class, 'create']);
Route::get('/', [AdminController::class, 'index']);

Route::get('/', [ContactController::class, 'index']);