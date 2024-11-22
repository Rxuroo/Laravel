<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerbit; // Pastikan untuk menambahkan import model Penerbit

class PagesController extends Controller
{
    public function loginPage()
    {
        return view('public.login');
    }

    public function dashboardAdmin()
    {
        return view('admin.dashboard', ['level' => 'siswa']);
    }

    public function bukuAdmin()
    {
        return view('admin.bukuAdmin');
    }

    public function penulisAdmin()
    {
        return view('admin.penulisAdmin');
    }

    public function peminjamanAdmin()
    {
        return view('admin.peminjamanAdmin');
    }

    public function pengaturanAdmin()
    {
        return view('admin.pengaturanAdmin');
    }

    public function create_penerbit()
    {
        return view('admin.penerbit.create_penerbit');
    }

    public function penerbit()
    {
        $data = Penerbit::readPenerbit();
        return view('pages.penerbit', ['level' => 'admin'])->with('penerbit', $data);
    }

    public function update_penerbit($id)
    {
        $penerbit = Penerbit::readPenerbitById($id);
        return view('actions.penerbit.update_penerbit', ['level' => 'admin'])->with('penerbit', $penerbit);
    }
}
