<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Equipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FormBeritaAcara; // Pastikan Anda memiliki model "FormBeritaAcara" yang sesuai
use App\Models\ListKebutuhanBeritaAcara; // Pastikan Anda memiliki model "FormBeritaAcara" yang sesuai

class FormBeritaAcaraController extends Controller
{
    public function index()
    {
        $beritaacara = FormBeritaAcara::all();
        return view('formberitaacara.index', compact('beritaacara'));
    }

    public function create($id)
    {
        $equipment = Equipment::find($id);
        return view('formberitaacara.create',compact('id','equipment'));
    }

    public function store(Request $request)
    {
        // dd($request->all());


        // Simpan data formberitaacara
        $formBeritaAcara = FormBeritaAcara::create($request->all());

        // Lakukan multiple insert ke listkebutuhanberitaacara
        $deskripsilist = $request->input('deskripsilist');
        $modelpart = $request->input('modelpart');
        $qty = $request->input('qty');
        $keterangan = $request->input('keterangan');
        $type = "FormBeritaAcara";

        // Loop untuk menyimpan data listkebutuhanberitaacara
        foreach (range(0, count($deskripsilist) - 1) as $index) {
            // dd($deskripsilist[$index]);
            ListKebutuhanBeritaAcara::create([
                'id_beritaacara' => $formBeritaAcara->id,
                'deskripsilist' => $deskripsilist[$index], // Ubah menjadi 'deskripsi'
                'modelpart' => $modelpart[$index], // Ubah menjadi 'modelpart'
                'qty' => $qty[$index], // Ubah menjadi 'qty'
                'keterangan' => $keterangan[$index], // Ubah menjadi 'keterangan'
                'type' => $type, // Ubah menjadi 'keterangan'
            ]);
        }

        $history = new History();
        $history->type = "Survei"; 
        $history->id_act = $formBeritaAcara->id;
        $history->id_equipment = $request->id_equipment;
        $history->id_user = "1";
        $equipment = Equipment::find($id);
        $history->customer = $equipment->customer;
        $history->save();        

    return redirect()->route('equipment.show',$request->id_equipment)->with('success', 'Form Berita Acara telah disimpan.');
    }


    public function show($id)
    {
        $beritaacara = FormBeritaAcara::find($id);
        $list = ListKebutuhanBeritaAcara::where('type', 'FormBeritaAcara')->where('id_beritaacara', $id)->get();
        return view('formberitaacara.show', compact('beritaacara','list'));
    }

    public function edit($id)
    {
        $beritaacara = FormBeritaAcara::find($id);
        return view('formberitaacara.edit', compact('beritaacara'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input dari form

        $beritaacara = FormBeritaAcara::find($id);
        $beritaacara->update($request->all());

        // Redirect atau lakukan apa yang diperlukan setelah berhasil memperbarui

        return redirect()->route('formberitaacara.index');
    }

    public function destroy($id)
    {
        $beritaacara = FormBeritaAcara::find($id);
        $beritaacara->delete();

        // Redirect atau lakukan apa yang diperlukan setelah berhasil menghapus

        return redirect()->route('formberitaacara.index');
    }
}
