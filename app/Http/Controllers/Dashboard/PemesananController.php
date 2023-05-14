<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        return view('dashboard.pemesanan');
    }
    public function insert()
    {
        return view('dashboard.insertPemesanan');
    }

    public function store(Request $request){
        $pemesanan = new Pemesanan();
        $pemesanan->nama_pelanggan = $request->input('nama_pelanggan');
        $kendaraan->no_kendaraan = $request->input('nama_kendaraan');
        $kendaraan->tipe = $request->input('tujuan');
        $kendaraan->tahun = $request->input('tahun');
        $kendaraan->harga_12_jam = $request->input('tanggal_pengambilan');
        $kendaraan->harga_24_jam = $request->input('tanggal_pengembalian');
        $kendaraan->deskripsi = $request->input('sopir');
        $kendaraan->deskripsi = $request->input('waktu_pengambilan');
        $kendaraan->deskripsi = $request->input('waktu_pengembalian');
        $kendaraan->deskripsi = $request->input('status');
        if($request->hasFile('foto_ktp')){
            $file = $request->file('foto_ktp');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->storeAs('image/ktp/',$filename);
            $kendaraan->bukti_ktp = $filename;
        }
        if($request->hasFile('bukti_tf')){
            $file = $request->file('bukti_tf');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->storeAs('image/transfer/',$filename);
            $kendaraan->image = $filename;
        }
    $kendaraan->save();

    return redirect()->back()->with('status','Data Telah Ditambahkan');
}
}
