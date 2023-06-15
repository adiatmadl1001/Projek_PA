<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UsageController;
use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [App\Http\Controllers\auth\LoginController::class, 'login'])->name ('login');
Route::post('/loginaksi', [App\Http\Controllers\auth\LoginController::class, 'loginaksi'])->name ('loginaksi');
Route::get('/main', [App\Http\Controllers\MainController::class, 'index'])->name('main')->middleware('auth');
Route::get('/logoutaksi', [App\Http\Controllers\auth\LoginController::class, 'logoutaksi'])->name('logoutaksi')->middleware('auth');

Route::get('/usage', function () {
    return view('usage');
});
