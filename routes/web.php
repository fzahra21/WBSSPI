<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengaduanController;

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
Route::get('/editpengaduan', [PublicController::class, 'editpengaduan']);
Route::get('/detailpengaduan', [PublicController::class, 'detailpengaduan']);

Route::group(['middleware' => ['auth','role:auditor'], 'prefix' => 'dashboard'], function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::prefix('laporan')->group(function() {
        Route::get('buat', [LaporanController::class, 'index']);
        Route::post('post', [LaporanController::class, 'create_laporan']);
    });
});

Route::group(['middleware'=>['auth','role:whistleblower'],'prefix'=>'pengaduan'],function(){
    Route::get('/', [PengaduanController::class, 'index']);
    Route::get('/buat', [PengaduanController::class, 'index_create_pengaduan']);
    Route::post('/post',[PengaduanController::class,'create_pengaduan']);
    Route::get('/rincian/{id}', [PengaduanController::class, 'index_detail']);
});