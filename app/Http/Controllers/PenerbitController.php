<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    
    public function index()
    {
        $penerbit = Penerbit::all();

        return view('admin.penerbit.index', ['penerbits' => $penerbit]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'notelp' => 'required|string|max:15',
            'email' => 'required|email|unique:penerbit,penerbit_email',
        ]);

        $id = mt_rand(1000000000000000, 9999999999999999); 
        $data = [
            'penerbit_id' => $id,
            'penerbit_nama' => $request->input('nama'),
            'penerbit_alamat' => $request->input('alamat'),
            'penerbit_notelp' => $request->input('notelp'),
            'penerbit_email' => $request->input('email'),
        ];

        Penerbit::create($data);

        return redirect()->route('admin.penerbit.index')->with('success', 'Data penerbit berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'notelp' => 'required|string|max:15',
            'email' => 'required|email|unique:penerbit,penerbit_email,' . $id . ',penerbit_id',
        ]);

        $data = [
            'penerbit_nama' => $request->input('nama'),
            'penerbit_alamat' => $request->input('alamat'),
            'penerbit_notelp' => $request->input('notelp'),
            'penerbit_email' => $request->input('email'),
        ];

        $penerbit = Penerbit::updatePenerbit($id, $data);

        if ($penerbit) {
            return redirect()->route('admin.penerbit.index')->with('success', 'Data penerbit berhasil diperbarui!');
        }

        return redirect()->route('admin.penerbit.index')->with('error', 'Data penerbit tidak ditemukan.');
    }

    public function delete($penerbit_id)
    {
        $penerbit = Penerbit::findOrFail($penerbit_id);
        $penerbit->delete();

        return redirect()->route('admin.penerbit.index')->with('deleted', 'Data penerbit berhasil dihapus!');
    }
}
