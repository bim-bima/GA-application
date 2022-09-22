<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\LokasiAssetContoller;
use App\Http\Controllers\MasterKendaraanController;
use App\Http\Controllers\MasterPicController;
use App\Http\Controllers\MasterAktivitasController;
use App\Http\Controllers\MasterVendorController;
use App\Http\Controllers\MasterBarangController;
use App\Http\Controllers\MasterJenisBarangController;
use App\Http\Controllers\MasterStatusFollowupController;
use App\Http\Controllers\MasterLokasiAssetController;
use App\Http\Controllers\MasterCategoryBarangController;




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

Route::middleware(['guest'])->group(function(){
    Route::get('/', function () {
        return view('/auth/login');
    });
});

Route::middleware(['auth'])->group(function(){
    // app routes
    Route::resource('app_asset', AssetController::class);
    Route::resource('app_aktivitas', AktivitasController::class);
    Route::post('app_aktivitas/store',[AktivitasController::class,'store']);
    Route::patch('app_aktivitas/update/{id}',[AktivitasController::class,'update']);
    Route::delete('app_aktivitas/destroy/{id}',[AktivitasController::class,'destroy']);

    // master data routes
    Route::resource('master_pic', MasterPicController::class);
    Route::resource('master_kendaraan', MasterKendaraanController::class);
    Route::resource('master_aktivitas', MasterAktivitasController::class);
    Route::resource('master_vendor', MasterVendorController::class);
    Route::resource('master_barang', MasterBarangController::class);
    Route::resource('master_jenisbarang', MasterJenisBarangController::class);
    Route::resource('master_categorybarang', MasterCategoryBarangController::class);
    Route::resource('master_statusfollowup', MasterStatusFollowupController::class);
    Route::resource('master_lokasiasset', MasterLokasiAssetController::class);



    // Route::get('/master_kendaraan',[MasterKendaraanController::class,'index']);
    // Route::get('/master_kendaraan/create',[MasterKendaraanController::class,'create']);
    // Route::post('/master_kendaraan/store',[MasterKendaraanController::class,'store']);
    // Route::get('/master_kendaraan/{id}/edit',[MasterKendaraanController::class,'edit']);
    // Route::put('/master_kendaraan/{id}',[MasterKendaraanController::class,'update']);
    // Route::delete('/masster_kendaraan/{id}',[MasterKendaraanController::class,'destroy']);
    // Route::get('/asset',[AssetController::class,'index']);

    // Route::get('/lokasi_asset',[LokasiAssetContoller::class,'index']);

    // Route::get('/monitoring-kendaraan',[Monitoring_KendaraanController::class,'index']);
    // Route::get('/monitoring-kendaraan/create',[Monitoring_KendaraanController::class,'create']);
    // Route::post('/monitoring-kendaraan/store',[Monitoring_KendaraanController::class,'store']);
    // Route::get('/monitoring-kendaraan/{id}/edit',[Monitoring_KendaraanController::class,'edit']);
    // Route::put('/monitoring-kendaraanp/{id}',[Monitoring_KendaraanController::class,'update']);
    // Route::delete('/monitoring-kendaraan/{id}',[Monitoring_KendaraanController::class,'destroy']);

    // Route::get('/asset',[AssetController::class,'index']);
    // Route::get('/asset/create',[AssetController::class,'create']);
    // Route::post('/asset/store',[AssetController::class,'store']);
    // Route::get('/asset/{id}/edit',[AssetController::class,'edit']);
    // Route::put('/asset/{id}',[AssetController::class,'update']);
    // Route::delete('/asset/{id}',[AssetController::class,'destroy']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
