<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\CoolingUnit;
use Illuminate\Http\Request;
use App\Models\Equipment;

class CoolingUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {
        $equipmentId = Equipment::find($id); // Placeholder value
        
        return view('equipment.CoolingUnit.create', compact('id'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Mengumpulkan nilai dari tiga input menjadi satu string dengan pemisah koma untuk setiap pertanyaan
        $qData = [
            'q1' => implode(',', $request->input('q1')),

            'q2' => implode(',', $request->input('q2')),

            'q3' => implode(',', $request->input('q3')),

            'q4' => implode(',', $request->input('q4')),

            'q5' => implode(',', $request->input('q5')),

            'q6' => implode(',', $request->input('q6')),

            'q7' => implode(',', $request->input('q7')),

            'q8' => implode(',', $request->input('q8')),

            'q9' => implode(',', $request->input('q9')),

            'q10' => implode(',', $request->input('q10')),

            'q11' => implode(',', $request->input('q11')),

            'q12' => implode(',', $request->input('q12')),

            'q13' => implode(',', $request->input('q13')),

            'q14' => implode(',', $request->input('q14')),

            'q15' => implode(',', $request->input('q15')),

            'q16' => implode(',', $request->input('q16')),

            'q17' => implode(',', $request->input('q17')),

            'q18' => implode(',', $request->input('q18')),

            'q19' => implode(',', $request->input('q19')),

            'q20' => implode(',', $request->input('q20')),

            'q21' => implode(',', $request->input('q21')),

            'q22' => implode(',', $request->input('q22')),

            'q23' => implode(',', $request->input('q23')),

            'q24' => implode(',', $request->input('q24')),

            'q25' => implode(',', $request->input('q25')),

            'q26' => implode(',', $request->input('q26')),

            'q27' => implode(',', $request->input('q27')),

            'q28' => implode(',', $request->input('q28')),
        ];
    
        // Simpan data ke dalam model CoolingUnit
        $CoolingUnit = CoolingUnit::create($qData);

        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
            $history = new History();
            $history->type = "Cooling Unit"; // Sesuaikan dengan jenis equipment
            $history->id_act = $CoolingUnit->id;
            $history->id_equipment = $request->id;
            $history->id_user = "1"; // Gunakan ID user yang sedang login
            $history->save();
            return redirect()->route('equipment.show',$request->id)->with('success', 'Task list telah disimpan.');
    }

    
    

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoolingUnit  $CoolingUnit
     * @return \Illuminate\Http\Response
     */
    public function show(CoolingUnit $CoolingUnit)
    {
        $CoolingUnit = CoolingUnit::findOrFail(); // Sesuaikan dengan model CoolingUnit
        return view('equipment.CoolingUnit.show', compact('CoolingUnit'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoolingUnit  $CoolingUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(CoolingUnit $CoolingUnit)
    {
        $CoolingUnit = CoolingUnit::findOrFail(); // Sesuaikan dengan model CoolingUnit
        return view('equipment.CoolingUnit.edit', compact('CoolingUnit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoolingUnit  $CoolingUnit
     * @return \Illuminate\Http\Response
     */
}