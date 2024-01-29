<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Customer;
use App\Models\Equipment;
use App\Models\History;
use App\Models\Kapasitas;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment= Equipment::all();
        return view('equipment.index', compact('equipment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area= Area::all();
        $kapasitas= Kapasitas::all();
        $customer= Customer::all();
        return view('equipment.create', compact('area', 'kapasitas','customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipment= new Equipment;
        $equipment->jenis= $request->jenis;
        $equipment->customer= $request->customer;
        $equipment->brand= $request->brand;
        $equipment->serial_number= $request->serial_number;
        $equipment->nameplate= $request->nameplate;
        $equipment->tahun_installasi= $request->tahun_installasi;
        $equipment->tahun_pembuatan= $request->tahun_pembuatan;
        $equipment->kapasitas= $request->kapasitas;
        $equipment->area= $request->area;
        if ($request->hasFile('foto')) {
            $fileimg = $request->file('foto');
            $name = time() . '_' . $fileimg->getClientOriginalName();
            $fileimg->storeAs('public/image', $name);
            $equipment->foto = $name;
        }
        $equipment->save(); 
        return redirect()->route('equipment.index')->with('success', 'Data equipment berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
            $history = History::where('id_equipment',$equipment->id)->get();
            return view('equipment.show', compact('equipment','history'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        //
    }
}
