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

Route::group(['middleware' => ['auth','role:auditor'], 'prefix' => 'dashboard'], function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::prefix('pengaduan')->group(function(){
        Route::get('/detail/{id}',[PengaduanController::class,'index_detail_pengaduan']);
        Route::get('/{id}',[PengaduanController::class,'index_update_pengaduan']);
        Route::put('/update/{id}',[PengaduanController::class,'update_status_pengaduan']);
        Route::delete('/delete/{id}',[PengaduanController::class,'delete_pengaduan']);
    });
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

Route::get('api/pengaduan', [PengaduanController::class, 'get_pengaduan_api']);
Route::get('api/pengaduan/{id}', [PengaduanController::class, 'get_pengaduan_api_by_id']);