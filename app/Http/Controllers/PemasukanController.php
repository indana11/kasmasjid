<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Keuangan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class PemasukanController extends Controller
{
    public function index()
    {

        $now = Carbon::now();
        $pemasukan_dn = Keuangan::join('donasis', 'keuangans.donasi_id', '=', 'donasis.id')
            ->where('keuangans.status', '=', 'pemasukan')
            ->where('donasis.status', '=', 'Diterima')
            ->whereIn('keuangans.deskripsi', ['Bantuan Donasi'])->get();
        $validasi = Keuangan::join('donasis', 'donasis.id', '=', 'keuangans.donasi_id')
            ->where('keuangans.status', '=', 'pemasukan')
            ->where('donasis.status', '=', 'Diverifikasi')
            ->whereIn('keuangans.deskripsi', ['Bantuan Donasi'])->get();
        $ditolak = Keuangan::join('donasis', 'donasis.id', '=', 'keuangans.donasi_id')
            ->where('keuangans.status', '=', 'pemasukan')
            ->where('donasis.status', '=', 'ditolak')
            ->whereIn('keuangans.deskripsi', ['Bantuan Donasi'])->get();
        $keuangan = Keuangan::where('status', 'pemasukan')->whereNotIn('deskripsi', ['Bantuan Donasi'])->get();
        return view('pemasukan.index', compact('now', 'pemasukan_dn', 'ditolak', 'validasi', 'keuangan'), [
            'title' => 'Pemasukan'
        ]);
    }

    public function store(Request $request)
    {

        $data = Keuangan::get();
        $pemasukan = new Keuangan();
        $pemasukan->user_id = Auth::user()->id;
        $pemasukan->tanggal = $request->tanggal;
        $pemasukan->deskripsi = $request->deskripsi;
        $pemasukan->pemasukan = $request->pemasukan;
        $pemasukan->status = 'pemasukan';
        foreach ($data as $item) {
            $pemasukan->saldo = $item->saldo + $request->pemasukan;
        }

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $pemasukan->foto = $request->file('foto')->getClientOriginalName();
            $pemasukan->save();
        }
        Alert::success('Success Add Data');
        return redirect('/pemasukan')->with('succes', 'Data berhasil di simpan');
    }

    public function destroy($id)
    {
        $keuangan = Keuangan::find($id);
        $keuangan->delete();
        Alert::warning('Success Delete Data');
        return redirect()->back();
    }
}
