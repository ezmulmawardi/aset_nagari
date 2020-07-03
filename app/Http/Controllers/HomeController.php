<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\User;
use App\Barang;
use App\Bidang_barang;
use App\Bidang_kegiatan;
use App\Golongan_barang;
use App\Jenis_barang;
use App\Kelompok_barang;
use App\Laporan;
use App\Peminjaman_barang;
use App\Peminjam;
use App\Pengadaan;
use App\Penggunaan;
use App\Penghapusan;
use App\Perangkat;
use App\Register;
use App\Rpjm_rkp;


class HomeController extends Controller
{ 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Gate::allows('isAdmin')) {
            // abort(404,"alun pas lai");
            return view('admin.index');
        }
        if (Gate::allows('isUser')) {
            // abort(404,"alun pas lai");
            $barang = Barang::join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
            ->select('*','barangs.id_brg as id_barang')
            ->get();
            $perangkat=Perangkat::get();
            return view('user.index')->with(compact('barang','perangkat'));
        }
        
    }

    // public function ajax(Request $request){
    //     $data = Bidang_brg::where(['kode_golongan'=>$request->id])->get();
    //     $isi = array();
    //     foreach ($data as $d => $value) {
    //         $isi[$d]=$value;
    //     }
    //     return response()->json($isi);
    // }
}
