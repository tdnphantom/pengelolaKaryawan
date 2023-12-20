<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // Tambah Data Form
    public function create()
    {
        return view('tambah-data');
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), PegawaiData::$rules);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        PegawaiData::create($request->all());

        return redirect()->route('dashboard-admin')->with('success', 'Pegawai Data Berhasil Dibuat');
    }

    // Other Panel
    public function show()
    {
        $pegawaiDatas = PegawaiData::paginate(10); // Ubah angka 10 sesuai dengan jumlah data yang ingin ditampilkan per halaman

        return view('admin.list-data', compact('pegawaiDatas'));
    }

    // Tambahkan action edit
    public function edit($nik_admedika)
    {
        $pegawaiData = PegawaiData::find($nik_admedika);

        return view('edit-data', ['pegawaiData' => $pegawaiData]);
    }

    // Tambahkan action update
    public function update(Request $request, $nik_admedika)
    {
        $pegawaiData = PegawaiData::find($nik_admedika);
        $pegawaiData->update($request->all());

        return redirect()->route('dashboard-admin')->with('success', 'Data Pegawai berhasil diupdate.');
    }

    // Tambahkan action delete
    public function destroy($nik_admedika)
    {
        $pegawaiData = PegawaiData::find($nik_admedika);
        $pegawaiData->delete();

        return redirect()->route('dashboard-admin')->with('success', 'Data Pegawai berhasil dihapus.');
    }
}
