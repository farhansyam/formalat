<?php

use App\Http\Controllers\AreaController;

use App\Http\Controllers\ColdStorageController;
use App\Http\Controllers\CoolingUnitController;
use App\Http\Controllers\EvaporatorAirCoolerController;
use App\Http\Controllers\MiniChillerController;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormBeritaAcaraController;
use App\Http\Controllers\KapasitasController;
use App\Http\Controllers\TroubleshootController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('customer', CustomerController::class)->name('index', 'customer.index');
Route::resource('kapasitas', KapasitasController::class)->name('index', 'kapasitas.index');
Route::resource('area', AreaController::class)->name('index', 'area.index');
Route::resource('equipment', EquipmentController::class)->name('index', 'equipment.index');


Route::resource('formberitaacara', FormBeritaAcaraController::class)->name('index', 'formberitaacara.index');
Route::get('survey/{id}', [FormBeritaAcaraController::class,'create'])->name('survey.create');
Route::resource('troubleshoot', TroubleshootController::class)->name('index', 'troubleshoot.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cold-storage', [ColdStorageController::class, 'index'])->name('cold-storage.index');
Route::get('/cooling-unit', [CoolingUnitController::class, 'index'])->name('cooling-unit.index');
Route::get('/evaporator-aircooler', [EvaporatorAirCoolerController::class, 'index'])->name('evaporator-aircooler.index');
Route::get('/mini-chiller', [MiniChillerController::class, 'index'])->name('mini-chiller.index');