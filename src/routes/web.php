<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', [EmployeeController::class, 'index']);
Route::delete('/{id}', [EmployeeController::class, 'destroy']);

Route::get('/create', [EmployeeController::class, 'create']);
Route::post('/create', [EmployeeController::class, 'store']);

Route::get('/edit/{id}', [EmployeeController::class, 'edit']);
Route::patch('/edit/{id}', [EmployeeController::class, 'update']);