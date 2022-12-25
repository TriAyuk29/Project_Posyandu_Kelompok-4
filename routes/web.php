<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPesertaController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\JadwalController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => 'user/'], function () {
    Route::get("register", [UserController::class, "register"]);
    Route::post("process-register", [UserController::class, "processRegister"]);
    Route::get("register-success/{id}", [UserController::class, "registerSuccess"]);

    
    Route::get("login", [UserController::class, "login"])->name("login");
    Route::post("process-login", [UserController::class, "processLogin"]);

    Route::get("login", [UserController::class, "login"])->name("login");
    Route::post("process-login", [UserController::class, "processLogin"]);
    Route::get("dashboard", [DashboardController::class, 'index'])->name('dashboard');
    Route::post("jadwal", [DashboardController::class, 'jadwal'])->name('jadwal');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});

Route::prefix('datapeserta')->group(function(){
    Route::get('/view',[DataPesertaController::class, 'DataPesertaView'])->name('datapeserta.view');
    Route::get('/add',[DataPesertaController::class, 'DataPesertaAdd'])->name('datapeserta.add');
    Route::post('/store',[DataPesertaController::class, 'DataPesertaStore'])->name('datapeserta.store');
    Route::get('/edit/{id}',[DataPesertaController::class, 'DataPesertaEdit'])->name('datapeserta.edit');
    Route::post('/update/{id}',[DataPesertaController::class, 'DataPesertaUpdate'])->name('datapeserta.update');
    Route::get('/delete/{id}',[DataPesertaController::class, 'DataPesertaDelete'])->name('datapeserta.delete');
}); 

Route::prefix('inventaris')->group(function(){
    Route::get('/view',[InventarisController::class, 'InventarisView'])->name('inventaris.view');
    Route::get('/add',[InventarisController::class, 'InventarisAdd'])->name('inventaris.add');
    Route::post('/store',[InventarisController::class, 'InventarisStore'])->name('inventaris.store');
    Route::get('/edit/{id}',[InventarisController::class, 'InventarisEdit'])->name('inventaris.edit');
    Route::post('/update/{id}',[InventarisController::class, 'InventarisUpdate'])->name('inventaris.update');
    Route::get('/delete/{id}',[InventarisController::class, 'InventarisDelete'])->name('inventaris.delete');
}); 

Route::prefix('jadwal')->group(function(){
    Route::get('/view',[JadwalController::class, 'JadwalView'])->name('jadwal.view');
    Route::get('/add',[JadwalController::class, 'JadwalAdd'])->name('jadwal.add');
    Route::post('/store',[JadwalController::class, 'JadwalStore'])->name('jadwal.store');
    Route::get('/edit/{id}',[JadwalController::class, 'JadwalEdit'])->name('jadwal.edit');
    Route::post('/update/{id}',[JadwalController::class, 'JadwalUpdate'])->name('jadwal.update');
    Route::get('/delete/{id}',[JadwalController::class, 'JadwalDelete'])->name('jadwal.delete');
}); 

// Route::get('/logout', 'DataPesertaController@logout')->name('logout');