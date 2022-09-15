<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\LokasiAssetContoller;
use App\Http\Controllers\MasterKendaraanController;
use App\Http\Controllers\MasterPicController;
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

    Route::resource('master_pic', MasterPicController::class);



    Route::get('/master_kendaraan',[MasterKendaraanController::class,'index']);
    Route::get('/master_kendaraan/create',[MasterKendaraanController::class,'create']);
    Route::post('/master_kendaraan/store',[MasterKendaraanController::class,'store']);
    Route::get('/master_kendaraan/{id}/edit',[MasterKendaraanController::class,'edit']);
    Route::put('/master_kendaraan/{id}',[MasterKendaraanController::class,'update']);
    Route::delete('/masster_kendaraan/{id}',[MasterKendaraanController::class,'destroy']);
    Route::get('/asset',[AssetController::class,'index']);

    Route::get('/lokasi_asset',[LokasiAssetContoller::class,'index']);

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
