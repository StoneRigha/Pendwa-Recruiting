<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_team_view', [AdminController::class, 'addview']);
Route::post('/upload_team', [AdminController::class, 'upload']); 
Route::post('/application', [HomeController::class, 'application']);
Route::get('/showapplications', [AdminController::class, 'showapplications']);
Route::get('/deleteapplication/{id}', [AdminController::class, 'deleteapplication']);
Route::get('/updateapplication/{id}', [AdminController::class, 'updateapplication']);
Route::post('/editapplication/{id}', [AdminController::class, 'editapplication']);