<?php

use App\Http\Controllers\AreaController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('customer', CustomerController::class)->name('index', 'customer.index')->middleware('auth');
Route::resource('kapasitas', KapasitasController::class)->name('index', 'kapasitas.index')->middleware('auth');
Route::resource('area', AreaController::class)->name('index', 'area.index')->middleware('auth');
Route::resource('equipment', EquipmentController::class)->name('index', 'equipment.index')->middleware('auth');
Route::get('equipment/print/{id}', [EquipmentController::class,'print'])->name('equipment.print')->middleware('auth');
Route::get('equipment/pp/{id}', [EquipmentController::class,'printpp'])->name('equipment.printp')->middleware('auth');


Route::resource('formberitaacara', FormBeritaAcaraController::class)->name('index', 'formberitaacara.index')->middleware('auth');
Route::get('survey/{id}', [FormBeritaAcaraController::class,'create'])->name('survey.create')->middleware('auth');
Route::get('search', [EquipmentController::class,'scan'])->name('scan')->middleware('auth');
Route::resource('troubleshoot', TroubleshootController::class)->name('index', 'troubleshoot.index')->middleware('auth');
Route::get('ts/{id}', [TroubleshootController::class, 'create'])->name('ts.create')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');



Auth::routes();

