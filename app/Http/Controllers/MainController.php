<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {

        // $tagihan = Tagihan::select('id_meteran', 'kwh_before', 'kwh_after', 'created_at')->groupBy('id_meteran', 'created_at')->get();
        // group by id_meteran
        // $tagihan = $tagihan;

        // $tagihan = DB::table('tr_tagihan')
        //     ->select(DB::raw('(kwh_after - kwh_before) as pemakaian'), 'id_meteran', 'kwh_before', 'kwh_after', 'created_at')
        //     ->groupBy('id_meteran', 'created_at')
        //     ->get();

        $tagihan = DB::table('tr_tagihan as t1')
            ->select(
                DB::raw('MONTH(t1.created_at) as bulan'),
                DB::raw('SUM(t1.kwh_before) as total_awal'),
                DB::raw('SUM(t2.kwh_after) as total_akhir'),
                DB::raw('(SUM(t2.kwh_after) - SUM(t1.kwh_before)) as pemakaian')
            )
            ->join('tr_tagihan as t2', function ($join) {
                $join->on(DB::raw('MONTH(t1.created_at)'), '=', DB::raw('MONTH(t2.created_at)'));
            })
            ->groupBy(DB::raw('MONTH(t1.created_at)'))
            ->get();
        // dd($tagihan[0]->bulan);


        // $tagihan_per_bulan = $tagihan->map(function ($tagihan) {
        //     return [
        //         'bulan' => $tagihan->bulan,
        //         'total_kwh' => $tagihan->getTotalKWH()
        //     ];
        // })->groupBy('bulan');

        // dd($tagihan_per_bulan);
        // $i = -1;
        // // group by created at same month
        // $tagihan = $tagihan->groupBy(function ($item) use ($i) {
        //     if ($item->created_at->format('Y-m')) {
        //         ++$i;
        //         return $i;
        //     }
        // });

        // foreach ($tagihan as $key => $value) {
        //     // ubah tagian menjadi  berisi bulan dan total kwh saja
        //     // $tagihan[$key]["total"] = 0;
        //     $total = 0;
        //     foreach ($value as $kunci => $child) {
        //         $tagihan[$key]["bulan"] = $child->created_at->format('F');
        //         $total += $child->getTotalKWH();
        //         unset($value[$kunci]);
        //     }
        //     //detstroy child

        //     $tagihan[$key]["total"] = $total;
        // }
        // dd($tagihan);
        // $total = $tagihan->map(function ($child) {
        //     $child->map(function ($child) {
        //         return [
        //             'bulan' => $child->created_at->format('F'),
        //             'total' => $child->getTotalKWH()
        //         ];
        //     });
        //     // $child->total += $child->getTotalKWH();
        // });
        // dd($total);

        // dd($tagihan->getTotalKWH());
        // dd($tagihan[0]["bulan"]);

        return view('main', [
            'title' => 'main',
            'tagihan' => $tagihan
        ]);
    }
}
