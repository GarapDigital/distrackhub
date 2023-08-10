<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\HttpRequestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->middleware(['guest'])->name('welcome');

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {

    Route::middleware(['guest'])->group(function () {
        Route::get('login', [AuthController::class, 'loginPage'])->name('login-page');
        Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    });

    Route::get('logout', [AuthController::class, 'logout'])->middleware(['auth'])->name('logout');

});

Route::group(['prefix' => 'panel', 'as' => 'panel.', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard-page');

    Route::group(['prefix' => 'http-request', 'as' => 'http-request.'], function () {
        Route::get('/', [HttpRequestController::class, 'HttpRequestPage'])->name('index');
    });

    Route::group(['prefix' => 'github', 'as' => 'github.'], function () {
        Route::get('/', [GithubController::class, 'githubIndexPage'])->name('index');
    });
});
