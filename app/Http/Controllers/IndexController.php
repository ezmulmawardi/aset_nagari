<?php
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use Gate;
use App\User;
use App\Barang;
use App\Desa;
use App\Bidang_barang;
use App\Bidang_kegiatan;
use App\Golongan_barang;
use App\Kode_bidang_kegiatan;
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

class IndexController extends Controller
{
    public function index(){
     	if (Gate::allows('isAdmin')) {
            $users = User::where(['roll'=>'2'])->get();
            return view('admin.index')->with(compact('users'));
        }
        elseif (Gate::allows('isUser')) {
            $barang = Barang::join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
            ->select('*','barangs.id_brg as id_barang')
            ->get();
            $perangkat=Perangkat::get();
            return view('user.index')->with(compact('barang','perangkat'));
        }
        else{
        	return view('user.login');
        }
    }
}
