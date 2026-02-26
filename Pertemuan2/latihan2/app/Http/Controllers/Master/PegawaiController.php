<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Master\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();

        return view('pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $pegawai = new Pegawai();
        $pegawai->uuid = Str::uuid();
        $pegawai->nama = $request->nama ?? null;
        $pegawai->unit_kerja = $request->unit_kerja ?? null;
        $pegawai->nip = $request->nip ?? null;
        $pegawai->save();

        return redirect()->route('index.pegawai')->with('berhasil', 'Data berhasil ditambahkan!');
    }

    public function edit($uuid)
    {
        $pegawai = Pegawai::where('uuid', $uuid)->first();

        if (!$pegawai) {
            return redirect()->back()->with('gagal', 'Data tidak ditemukan!');
        }

        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $uuid)
    {
        $pegawai = Pegawai::where('uuid', $uuid)->first();

        if (!$pegawai) {
            return redirect()->back()->with('gagal', 'Data tidak ditemukan!');
        }

        $pegawai->nama = $request->nama ?? null;
        $pegawai->unit_kerja = $request->unit_kerja ?? null;
        $pegawai->nip = $request->nip ?? null;
        $pegawai->save();

        return redirect()->route('index.pegawai')->with('berhasil', 'Data berhasil diubah!');
    }

    public function delete($uuid)
    {
        $pegawai = Pegawai::where('uuid', $uuid)->first();

        if (!$pegawai) {
            return redirect()->back()->with('gagal', 'Data tidak ditemukan!');
        }

        Pegawai::where('uuid', $uuid)->delete();

        return redirect()->route('index.pegawai')->with('berhasil', 'Data berhasil dihapus!');
    }
}
