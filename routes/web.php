<?php

use App\Http\Controllers\AkunController;
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
use App\Http\Controllers\FreonController;
use App\Http\Controllers\KapasitasController;
use App\Http\Controllers\RegulerController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TroubleshootController;
use App\Models\EvaporatorAirCooler;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('customer', CustomerController::class)->name('index', 'customer.index')->middleware('auth');
Route::resource('kapasitas', KapasitasController::class)->name('index', 'kapasitas.index')->middleware('auth');
Route::resource('area', AreaController::class)->name('index', 'area.index')->middleware('auth');
Route::resource('freon', FreonController::class)->name('index', 'freon.index')->middleware('auth');
Route::resource('reguler', RegulerController::class)->name('index', 'reguler.index')->middleware('auth');
Route::resource('akun', AkunController::class)->name('index', 'akun.index')->middleware('auth');
Route::resource('schedule', ScheduleController::class)->name('schedule', 'schedule.index')->middleware('auth');
Route::resource('equipment', EquipmentController::class)->name('index', 'equipment.index')->middleware('auth');
Route::get('equipment/print/{id}', [EquipmentController::class,'print'])->name('equipment.print')->middleware('auth');
Route::get('equipment/pp/{id}', [EquipmentController::class,'printpp'])->name('equipment.printp')->middleware('auth');
Route::post('equipment/search', [EquipmentController::class, 'search'])->name('equipment.search')->middleware('auth');
Route::get('scheduleget', [ScheduleController::class, 'GetSchedule'])->name('scheduleget')->middleware('auth');


Route::resource('formberitaacara', FormBeritaAcaraController::class)->name('index', 'formberitaacara.index')->middleware('auth');
Route::get('survey/{id}', [FormBeritaAcaraController::class,'create'])->name('survey.create')->middleware('auth');
Route::get('search', [EquipmentController::class,'scan'])->name('scan')->middleware('auth');
Route::resource('troubleshoot', TroubleshootController::class)->name('index', 'troubleshoot.index')->middleware('auth');
Route::get('ts/{id}', [TroubleshootController::class, 'create'])->name('ts.create')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');



Route::resource('formberitaacara', FormBeritaAcaraController::class)->name('index', 'formberitaacara.index');
Route::get('survey/{id}', [FormBeritaAcaraController::class,'create'])->name('survey.create');
Route::get('search', [EquipmentController::class,'scan'])->name('scan');
Route::resource('troubleshoot', TroubleshootController::class)->name('index', 'troubleshoot.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('cold-storage/{id}', [ColdStorageController::class, 'index2'])->name('cold-storage.index2');

Route::resource('/cold-storage', ColdStorageController::class)->names([
    'edit' => 'cold-storage.edit', // Nama untuk rute index
]);


Route::resource('/cooling-unit', CoolingUnitController::class)->names([
    'index' => 'cooling-unit.index', // Nama untuk rute index
    'edit' => 'cooling-unit.edit', // Nama untuk rute index
]);
Route::resource('/mini-chiller', MiniChillerController::class)->names([
    'index' => 'mini-chiller.index', // Nama untuk rute index
    'edit' => 'mini-chiller.edit', // Nama untuk rute index
]);
Route::resource('/evaporator-aircooler', EvaporatorAirCoolerController::class)->names([
    'index' => 'evaporator-aircooler.index', // Nama untuk rute index#
    'edit' => 'evaporator-aircooler.edit', // Nama untuk rute index
]);

Route::auth();