<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Area;
use App\Models\History;
use App\Models\Customer;
use App\Models\Equipment;
use App\Models\Kapasitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\View; // Import the View facade

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment= Equipment::paginate(10);
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
        $equipment->jamoperasi= $request->jamoperasi;
        $equipment->tanggaloperasi= $request->tanggaloperasi;
        // if ($request->hasFile('foto')) {
        //     $fileimg = $request->file('foto');
        //     $name = time() . '_' . $fileimg->getClientOriginalName();
        //     $fileimg->storeAs('public/image', $name);
        //     $equipment->foto = $name;
        // }

        // Inisialisasi string untuk menyimpan nama-nama file
        $imageNames = [];

        // Looping untuk setiap gambar yang diunggah
        foreach ($request->file('foto') as $image) {
            // Simpan gambar ke dalam folder yang ditentukan
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            // Tambahkan nama gambar ke array
            $imageNames[] = $imageName;
        }
        // Gabungkan nama-nama gambar dengan pemisah koma
        $imageNamesString = implode(',', $imageNames);
        $equipment->foto = $imageNamesString;
        $equipment->save();

        $route = route('equipment.show', ['equipment' => $equipment->id]);

        // Membuat gambar QR
        $qrCode = QrCode::format('png')->size(200)->generate($route);

        $namaGambar = 'qrcode_' . $equipment->id . '.png'; // Nama gambar sesuai kebutuhan
        $path = public_path($namaGambar); // Path menuju direktori publik

        file_put_contents($path, $qrCode);

        // Save QR code to the 'qrcode' column
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
        $equipment->delete();
        return back();
    }

    function scan(){
        return view('Equipment.search');
    }

    public function print($id)
    {
        $equipment = Equipment::findOrFail($id);

        // Generate QR Code
        $qrCode = QrCode::size(200)->generate($equipment->qrcode);

        // Render view blade dengan gambar QR
        $pdfContent = view('pdf.equipment', ['equipment' => $equipment, 'qrCode' => $qrCode])->render();

        // Buat objek DOMPDF
        $dompdf = new Dompdf();

        // Muat konten PDF
        $dompdf->loadHtml($pdfContent);

        // Set ukuran dan orientasi dokumen
        
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Cetak langsung ke printer
        $dompdf->stream('equipment_qrcode.pdf');
    }
    public function printpp($id)
    {
        $equipment = Equipment::findOrFail($id);
        return view('pdf.equipment',compact('equipment'));
    }
}
