<?php

<<<<<<< HEAD
use App\Http\Controllers\AkunController;
=======

>>>>>>> 802ba86988fa02daf2157331f8722bbdf57a4a93
use App\Http\Controllers\AreaController;

use App\Http\Controllers\AcSplitController;
use App\Http\Controllers\AirCooledWaterChillerController;
use App\Http\Controllers\ExhaustFanController;
use App\Http\Controllers\HumidifierController;
use App\Http\Controllers\PACController;
use App\Http\Controllers\AHUController;
use App\Http\Controllers\AUHPController;
use App\Http\Controllers\ChillerCentrifugalController;
use App\Http\Controllers\ColdStorageController;
use App\Http\Controllers\CoolingUnitController;
use App\Http\Controllers\EvaporatorAirCoolerController;
use App\Http\Controllers\MiniChillerController;
use App\Http\Controllers\CoolingTowerController;
use App\Http\Controllers\DehumidifierController;
use App\Http\Controllers\FCUController;
use App\Http\Controllers\PompaController;
use App\Http\Controllers\SpotCoolingController;
use App\Http\Controllers\WaterMistController;

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
use App\Models\AcSplit;
use App\Models\ChillerCentrifugal;
use App\Models\ColdStorage;
use App\Models\EvaporatorAirCooler;
use App\Models\ExhaustFan;
use App\Models\Humidifier;
use App\Models\SpotCooling;
use App\Models\WaterMist;
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


Route::get('ac-split/{id}', [AcSplitController::class, 'create'])->name('ac-split.create2');
Route::resource('/ac-split', AcSplitController::class)->names([
        'show' => 'ac-split.show', // Nama untuk rute edit
        'edit' => 'ac-split.edit', // Nama untuk rute edit
        ]);

    
Route::get('au-hp/{id}', [AUHPController::class, 'create'])->name('au-hp.create2');        
Route::resource('/au-hp', AUHPController::class)->names([
        'edit' => 'au-hp.edit', // Nama untuk rute index
        'show' => 'au-hp.show', // Nama untuk rute index
        ]);    

Route::get('air-cooled-water-chiller/{id}', [AirCooledWaterChillerController::class, 'create'])->name('air-cooled-water-chiller.create2');              
Route::resource('/air-cooled-water-chiller', AirCooledWaterChillerController::class)->names([
        'edit' => 'air-cooled-water-chiller.edit', // Nama untuk rute index
        'show' => 'air-cooled-water-chiller.show', // Nama untuk rute index
        ]);   


Route::get('PAC/{id}', [PACController::class, 'create'])->name('PAC.create2');    
Route::resource('/PAC', PACController::class)->names([
        'edit' => 'PAC.edit', // Nama untuk rute index
        'show' => 'PAC.show', // Nama untuk rute index
        ]); 

Route::get('cold-storage/{id}', [ColdStorageController::class, 'create'])->name('cold-storage.create2');
Route::resource('/cold-storage', ColdStorageController::class)->names([
<<<<<<< HEAD
    'edit' => 'cold-storage.edit', // Nama untuk rute index
]);


=======
        'show' => 'cold-storage.show', // Nama untuk rute edit
        'edit' => 'cold-storage.edit', // Nama untuk rute edit
        ]);

      
Route::get('cooling-unit/{id}', [CoolingUnitController::class, 'create'])->name('cooling-unit.create2');
>>>>>>> 802ba86988fa02daf2157331f8722bbdf57a4a93
Route::resource('/cooling-unit', CoolingUnitController::class)->names([
        'edit' => 'cooling-unit.edit', // Nama untuk rute index
        'show' => 'cooling-unit.show', // Nama untuk rute index
        ]);

Route::get('mini-chiller/{id}', [MiniChillerController::class, 'create'])->name('mini-chiller.create2');
Route::resource('/mini-chiller', MiniChillerController::class)->names([
        'edit' => 'mini-chiller.edit', // Nama untuk rute index
        'show' => 'mini-chiller.show', // Nama untuk rute index
        ]);

Route::get('evaporator-aircooler/{id}', [EvaporatorAirCoolerController::class, 'create'])->name('evaporator-aircooler.create2');    
Route::resource('/evaporator-aircooler', EvaporatorAirCoolerController::class)->names([
<<<<<<< HEAD
    'index' => 'evaporator-aircooler.index', // Nama untuk rute index#
    'edit' => 'evaporator-aircooler.edit', // Nama untuk rute index
]);

Route::auth();
=======
        'edit' => 'evaporator-aircooler.edit', // Nama untuk rute index
        'show' => 'evaporator-aircooler.show', // Nama untuk rute index
        ]);

Route::get('AHU/{id}', [AHUController::class, 'create'])->name('AHU.create2');    
Route::resource('/AHU', AHUController::class)->names([
        'edit' => 'AHU.edit', // Nama untuk rute index
        'show' => 'AHU.show', // Nama untuk rute index
        ]); 

Route::get('cooling-tower/{id}', [CoolingTowerController::class, 'create'])->name('cooling-tower.create2');       
Route::resource('/cooling-tower', CoolingTowerController::class)->names([
        'edit' => 'cooling-tower.edit', // Nama untuk rute index
        'show' => 'cooling-tower.show', // Nama untuk rute index
        ]); 


Route::get('humidifier/{id}', [HumidifierController::class, 'create'])->name('humidifier.create2');        
Route::resource('/humidifier', HumidifierController::class)->names([
        'edit' => 'humidifier.edit', // Nama untuk rute index
        'show' => 'humidifier.show', // Nama untuk rute index
        ]); 
    

Route::get('dehumidifier/{id}', [DehumidifierController::class, 'create'])->name('dehumidifier.create2');        
Route::resource('/dehumidifier', DehumidifierController::class)->names([
        'edit' => 'dehumidifier.edit', // Nama untuk rute index
        'show' => 'dehumidifier.show', // Nama untuk rute index
        ]); 
    
Route::get('fcu/{id}', [FCUController::class, 'create'])->name('fcu.create2');       
Route::resource('/fcu', FCUController::class)->names([
        'edit' => 'fcu.edit', // Nama untuk rute index
        'show' => 'fcu.show', // Nama untuk rute index
        ]); 
    
Route::get('exhaust-fan/{id}', [ExhaustFanController::class, 'create'])->name('exhaust-fan.create2');       
Route::resource('/exhaust-fan', ExhaustFanController::class)->names([
        'edit' => 'exhaust-fan.edit', // Nama untuk rute index
        'show' => 'exhaust-fan.show', // Nama untuk rute index
        ]); 
    
Route::get('pompa/{id}', [PompaController::class, 'create'])->name('pompa.create2');       
Route::resource('/pompa', PompaController::class)->names([
        'edit' => 'pompa.edit', // Nama untuk rute index
        'show' => 'pompa.show', // Nama untuk rute index
        ]); 
    
Route::get('spot-cooling/{id}', [SpotCoolingController::class, 'create'])->name('spot-cooling.create2');       
Route::resource('/spot-cooling', SpotCoolingController::class)->names([
        'edit' => 'spot-cooling.edit', // Nama untuk rute index
        'show' => 'spot-cooling.show', // Nama untuk rute index
        ]); 
    
Route::get('water-mist/{id}', [WaterMistController::class, 'create'])->name('water-mist.create2');       
Route::resource('/water-mist', WaterMistController::class)->names([
        'edit' => 'water-mist.edit', // Nama untuk rute index
        'show' => 'water-mist.show', // Nama untuk rute index
        ]); 

Route::get('chiller-centrifugal/{id}', [ChillerCentrifugalController::class, 'create'])->name('chiller-centrifugal.create2');       
Route::resource('/chiller-centrifugal', ChillerCentrifugalController::class)->names([
        'edit' => 'chiller-centrifugal.edit', // Nama untuk rute index
        'show' => 'chiller-centrifugal.show', // Nama untuk rute index
        ]); 
>>>>>>> 802ba86988fa02daf2157331f8722bbdf57a4a93
