<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang; // Corrected namespace

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'KodeBarang' => 'required|unique:barang|max:25',
            'NamaBarang' => 'required|max:25',
            'Satuan' => 'required|max:25',
            'HargaSatuan' => 'required|integer',
            'Stok' => 'required|integer',
        ]);

        try {
            Barang::create($validatedData);
            return redirect()->route('barang.index')->with('success', 'Barang has been added');
        } catch (\Exception $e) {
            return redirect()->route('barang.index')->with('error', 'Failed to add Barang');
        }
    }

    public function edit($KodeBarang)
    {
        $barang = Barang::findOrFail($KodeBarang);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $KodeBarang)
    {
        $validatedData = $request->validate([
            'NamaBarang' => 'required|max:25',
            'Satuan' => 'required|max:25',
            'HargaSatuan' => 'required|integer',
            'Stok' => 'required|integer',
        ]);

        try {
            Barang::where('KodeBarang', $KodeBarang)->update($validatedData);
            return redirect()->route('barang.index')->with('success', 'Barang has been updated');
        } catch (\Exception $e) {
            return redirect()->route('barang.index')->with('error', 'Failed to update Barang');
        }
    }

    public function destroy($KodeBarang)
    {
        try {
            Barang::where('KodeBarang', $KodeBarang)->delete();
            return redirect()->route('barang.index')->with('success', 'Barang has been deleted');
        } catch (\Exception $e) {
            return redirect()->route('barang.index')->with('error', 'Failed to delete Barang');
        }
    }
}
