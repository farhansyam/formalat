<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceReport;
use App\Models\FormBeritaAcara;
use App\Http\Controllers\Controller;
use App\Models\ListKebutuhanBeritaAcara;

class TroubleshootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troubleshoot = ServiceReport::all();
        return view('servicereport.index', compact('troubleshoot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicereport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());


        // Simpan data formberitaacara
        $formBeritaAcara = ServiceReport::create($request->all());

        // Lakukan multiple insert ke listkebutuhanberitaacara
        $deskripsilist = $request->input('deskripsilist');
        $modelpart = $request->input('modelpart');
        $qty = $request->input('qty');
        $keterangan = $request->input('keterangan');
        $type = "FormserviceReport";

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


        return redirect()->route('troubleshoot.index')->with('success', 'Form Berita Acara telah disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = ServiceReport::find($id);
        $list = ListKebutuhanBeritaAcara::where('type', 'FormserviceReport')->where('id_beritaacara', $id)->get();
        return view('servicereport.show', compact('service', 'list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
