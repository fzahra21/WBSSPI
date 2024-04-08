<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;

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

require __DIR__.'/auth.php';

Route::get('/', [PublicController::class, 'index']);
Route::get('/buatlaporan', [PublicController::class, 'buatlaporan']);
Route::get('/editpengaduan', [PublicController::class, 'editpengaduan']);
Route::get('/detailpengaduan', [PublicController::class, 'detailpengaduan']);
Route::get('/buatpengaduan', [PublicController::class, 'buatpengaduan']);
Route::get('/pengaduan', [PublicController::class, 'pengaduan']);
Route::get('/rincianpengaduan', [PublicController::class, 'rincianpengaduan']);


Route::group(['middleware' => ['auth'], 'prefix' =>'dashboard'], function() {
    Route::get('/', [DashboardController::class, 'index']);

});