<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\MiniChiller;
use Illuminate\Http\Request;

class MiniChillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipmentId = 1; // Placeholder value
        
        return view('equipment.MiniChiller.index', compact('equipmentId'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('equipment.MiniChiller.create');
    }


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
        ];
    
        // Simpan data ke dalam model MiniChiller
        $MiniChiller = MiniChiller::create($qData);

        // Pastikan $request->id_equipment tidak null sebelum menyimpan ke dalam tabel History
            $history = new History();
            $history->type = "Mini Chiller"; // Sesuaikan dengan jenis equipment
            $history->id_act = $MiniChiller->id;
            $history->id_equipment = $request->id_equipment;
            $history->id_user = "1"; // Gunakan ID user yang sedang login
            $history->save();
            return redirect()->route('equipment.show',$request->id_equipment)->with('success', 'Task list telah disimpan.');
    }

    
    

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MiniChiller  $MiniChiller
     * @return \Illuminate\Http\Response
     */
    public function show(MiniChiller $MiniChiller)
    {
        // $MiniChiller = MiniChiller::findOrFail($id); // Sesuaikan dengan model MiniChiller
        // return view('equipment.MiniChiller.show', compact('MiniChiller'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MiniChiller  $MiniChiller
     * @return \Illuminate\Http\Response
     */
    public function edit(MiniChiller $MiniChiller)
    {
        // $MiniChiller = MiniChiller::findOrFail($id); // Sesuaikan dengan model MiniChiller
        // return view('equipment.MiniChiller.edit', compact('MiniChiller'));
    }

    public function destroy(MiniChiller $miniChiller,$id)
    {
        $miniChiller = MiniChiller::findOrFail($id);
        $miniChiller->delete();
        return redirect()->route('equipment.index')->with('success', 'Data equipment berhasil dihapus');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MiniChiller  $MiniChiller
     * @return \Illuminate\Http\Response
     */
}