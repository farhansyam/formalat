<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ColdStorage; // Sesuaikan dengan nama model ColdStorage

class ColdStorageController extends Controller
{
    public function index()
    {
        return view('equipment.ColdStorage.index');
    }

    public function create()
    {
        // return view('equipment.ColdStorage.create');
    }

    public function store(Request $request)
    {
        // Validasi request di sini jika diperlukan
    
        // Iterasi melalui data yang dikirimkan dari form
        for ($i = 1; $i <= 34; $i++) {
            // Simpan data yang diperlukan ke dalam database
            $coldStorage = new coldStorage();
            $coldStorage->pertanyaan = $request->input("pertanyaan$i"); // Sesuaikan dengan nama input pada form
            $coldStorage->frequency = $request->input("Frequency$i"); // Sesuaikan dengan nama input pada form
            $coldStorage->standard_condition = $request->input("StandardCondition$i"); // Sesuaikan dengan nama input pada form
            $coldStorage->actual_check = $request->has("ActualCheck$i") ? 1 : 0; // Sesuaikan dengan nama input pada form
            $coldStorage->save();
        }
    
        return redirect()->route('cold-storage.index')->with('Success', 'Task List Cold Storage berhasil disimpan');
    }
    

    public function edit($id)
    {
        // $coldStorage = ColdStorage::findOrFail($id); // Sesuaikan dengan model ColdStorage
        // return view('equipment.ColdStorage.edit', compact('coldStorage'));
    }

    public function update(Request $request, $id)
    {
        // // Validasi data dari $request disini jika diperlukan

        // $coldStorage = ColdStorage::findOrFail($id); // Sesuaikan dengan model ColdStorage
        // // Update properti cold storage dari $request
        // $coldStorage->property1 = $request->input('property1');
        // $coldStorage->property2 = $request->input('property2');
        // // ...
        // $coldStorage->save();

        // return redirect()->route('equipment.index')->with('success', 'Cold Storage berhasil diperbarui');
    }

    public function show($id)
    {
        // $coldStorage = ColdStorage::findOrFail($id); // Sesuaikan dengan model ColdStorage
        // return view('equipment.ColdStorage.show', compact('coldStorage'));
    }
}
