<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecapitulationController extends Controller
{
    public function index(Request $request){
        // $tanggal_awal = Carbon::parse(request()->tanggal_awal)->format('Y-m-d H:i:s');
        // $tanggal_akhir = Carbon::parse(request()->tanggal_akhir)->format('Y-m-d H:i:s');
        $bulan = $request->input('bulan');
            $date = Carbon::parse($bulan)->format('Y-m');
            $show = DB::table('keuangans')
            ->where('tanggal', 'LIKE', '%'.$bulan.'%')
            ->whereNotIn('status',[!null])
            ->get();
        $rekape = DB::table('keuangans')->whereNotIn('status',[!null])
        ->select(DB::raw('monthname(tanggal)month'),
                 DB::raw('sum(pemasukan) as kas_masuk'),
                 DB::raw('sum(pengeluaran) as kas_keluar'),
                 DB::raw('sum(pemasukan)+ sum(pengeluaran) as total_saldo_semua'),
                 DB::raw('sum(pemasukan)- sum(pengeluaran) as total_saldo'))
        ->groupBy('month')
        ->orderBy('month','desc')
        ->get();
        $last_saldo = Keuangan::all()->last();

        // dd($bulan,$date);
        return view('recapitulation', ['title' => 'Rekapitulasi'],compact('rekape','show','date','last_saldo'));
    }
}
