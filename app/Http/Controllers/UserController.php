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
use App\Showdata;
use PDF;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

 

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if (!Gate::allows('isUser')) {
            return view('user.login');
        }
    } 

    public function pengaturan(){
        $username = Auth::user()->username;
        $users = User::where(['roll'=>'2','username'=>$username])->get();
        return view('user.profil')->with(compact('users'));
    }

    public function ubahprofil(Request $req){
        $data = $req->all();
        $username = Auth::user()->username;
        User::where(['roll'=>'2', 'username'=>$username])->update([
            'username'=>$data['username'],'name'=>$data['nama']
        ]);
        return redirect()->back();
    }

    public function ubahpass(Request $req){
        $data = $req->all();
        $username = Auth::user()->username;
        if ($data['pass']==$data['cpass']) {
            User::where(['roll'=>'2', 'username'=>$username])->update([
                'password'=>Hash::make($data['pass'])
            ]);
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    public function perangkatShow(){
        $perangkat = Perangkat::paginate(5);
        return view('user.perangkat_show', ['perangkat'=>$perangkat]);
    }
    public function perangkatStatUpdate($id){
        Perangkat::where(['nip'=>$id])->update([
                'status_p'=>'Tidak Aktif'
            ]);
        return redirect()->back();
    }
    public function perangkatStatUpdateA($id){
        Perangkat::where(['nip'=>$id])->update([
                'status_p'=>'Aktif'
            ]);
        return redirect()->back();
    }
    public function PerangkatInput(){
        return view('user.perangkat_input');
    }
    public function perangkat(Request $request){
        $data = $request->all();
        $a = new Perangkat;
        $a->nip = $data['nip'];
        $a->nama = $data['nama'];
        $a->jabatan = $data['jabatan'];
        $a->status_p = $data="Aktif";
        $a->save();
        return redirect()->back();
    }
    public function hapus_perangkat ($nip,$kode){
        if ($nip==1) {
            Perangkat::where(['nip'=>$kode])->delete();
            return redirect()->back();
        }
    }
    public function bidangkgShow(){
        $a = Kode_bidang_kegiatan::paginate(5);
        return view('user.bidang_kg_show', ['a'=>$a]);
    }
    public function bidangkgInput(){
        return view('user.bidangkg');
    }
    public function bidangKg(Request $request){
        $data = $request->all();
        $a = new Kode_bidang_kegiatan;
        $a->nama = $data['bidangkg'];
        $a->save();
        return redirect('/bidangkgShow');
    }
    // public function hapus_bidangkg($kode_kg,$kode){
    //     if ($kode_kg==1){
    //         Kode_bidang_kegiatan::where(['kode_kg'=>$kode])->delete();
    //         return redirect()->back();
    //     }
    // }
    public function bidangkgShowedit($id){
        $a = Kode_bidang_kegiatan::where(['kode_kg'=>$id])
        ->get();
        return view('user.bidangkg_edit', ['a'=>$a]);
    }
    public function bidangkgEdit(Request $request){
        $data = $request->all();
        Kode_bidang_kegiatan::where(['kode_kg'=>$data['id']])->update([
            'nama'=>$data['bidangkg']    
        ]); 
        return redirect('/bidangkgShow');
    }

    public function perencanaanBarang(){
        $a = Kode_bidang_kegiatan::get();
        return view('user.perencanaan')->with(compact('a'));
    }
    public function perencanaanShow(){
        $a = Bidang_kegiatan::all();
        return view('user.perencanaan_show', ['a'=>$a]);
    }
    public function perencanaan(Request $request){
        $data = $request->all();
        $a = new Bidang_kegiatan;
        $b = new Rpjm_rkp;
        $c = new Rpjm_rkp;

        $a->kode = $data['bidangkg'];
        $a->jenis_kegiatan = $data['jeniskg'];
        $a->lokasi = $data['lokasi'];
        $a->perkiraan_volume = $data['perkiraanv'];
        $a->satuan = $data['satuan'];
        $a->perkiraan_biaya = $data['perkiraanbiaya'];
        $a->sumber_biaya = $data['sumber'];
        $b->nomor = $data['norpjm'];
        $b->tanggal = $data['tglrpjm'];
        $b->periode = $data['periode'];
        $b->status = 'rpjm';
        $c->nomor = $data['norkp'];
        $c->tanggal = $data['tglrkp'];
        $c->status = 'rkp';
        $a->save();
        $b->save();
        $c->save();
        return redirect()->back();
    }

    public function pengadaanBarang(){
        $a = Jenis_barang::get();
        $b = Kode_bidang_kegiatan::get();
        return view('user.pengadaan')->with(compact('a','b'));
    }
    public function pengadaanShowedit($id){
        $a = Barang::join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->join('kode_bidang_kegiatans', 'barangs.bidang_kg', '=', 'kode_bidang_kegiatans.kode_kg')
        ->select('*','barangs.id_brg as id_barang') 
        ->where(['id_brg'=>$id])       
        ->get();
        $b = Kode_bidang_kegiatan::get();
        return view('user.pengadaan_edit')->with(compact('a','b'));
    }
    public function pengadaanShowdetail($id){
        $a = Barang::join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->join('kode_bidang_kegiatans', 'barangs.bidang_kg', '=', 'kode_bidang_kegiatans.kode_kg')
        ->select('*','barangs.id_brg as id_brg')        
        ->where(['id_brg'=>$id])
        ->get();
        return view('user.pengadaan_detail')->with(compact('a'));
    }
    //Post hasil Update pengadaanBarang
    public function pengadaanEdit(Request $req){
        $data = $req->all();
        Barang::where(['id_brg'=>$data['id']])->update([
            // 'nama_barang'=>$data['barang'],
            // 'asal_barang'=>$data['asal'],
            // 'bidang_kg'=>$data['bidangkg'],
            // 'jumlah'=>$data['jumlah'],
            // 'satuan'=>$data['satuan'],
            'tahun_perolehan'=>$data['thperolehan'],
            'perbup_no'=>$data['perbupno'],
            'perbup_thn'=>$data['perbupth'],
            'keterangan'=>$data['keterangan']    
        ]); 
        return redirect('/pengadaanShow');
    }
    public function pengadaanShow(){
        $a = Barang::join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','barangs.id_brg as id_barang')
        ->paginate(5);
        return view('user.pengadaan_show', ['a'=>$a]);
    }
    public function pengadaan(Request $request){
        $data = $request->all();
        $reg = Register::join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->select('*','registers.id_reg as id_register')
        ->get();
        $x = $data['jumlah'];

        $b = new Barang;
        $b->kode_jenisbrg = $data['barang'];
        $b->bidang_kg = $data['bidangkg'];
        $b->asal_barang = $data['asal'];
        $b->tahun_perolehan = $data['thperolehan'];
        // $b->jumlah = $data['jumlah'];
        $b->satuan = $data['satuan'];
        $b->perbup_no = $data['perbupno'];
        $b->perbup_thn = $data['perbupth'];
        $b->keterangan = $data['keterangan'];
        $b->save(); 

        $id_brg_new = Barang::get();
        foreach ($id_brg_new as $ibn) {
            $c=$ibn['id_brg'];
        }

        $periksa = 0;
        foreach ($reg as $key) {
            if ($data['barang']==$key['kode_jenisbrg']) {
                $periksa=1;
                $kr = $key['label']+1;
            }
        }

        if ($periksa==1) {
            for($i=$kr;$i<=$kr+$x-1;$i++){
                $a = new Register;
                $a->kode_brg = $c;
                $a->label = $i;
                $a->save();
            }
        }else{
            for($i=1;$i<=$x;$i++){
                $a = new register;
                $a->kode_brg = $c;
                $a->label = $i;
                $a->save();
            }
        }
        return redirect()->back();
    }
    public function registerBarang(){
        $a = Barang::join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','barangs.id_brg as id_barang')
        ->get();
        return view('user.register')->with(compact('a'));
    }
    public function registerShow(){
        $a = Register::join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','registers.id_reg as id_regist')
        ->paginate(10);
        return view('user.register_show', ['a'=>$a]);
    } 
    public function registerShowedit($kode){
        $a = Register::join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
            ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','registers.id_reg as id_regist')
        ->get();
        return view('user.register_edit',['a'=>$a]);
    }


    // public function edit_register (Request $req){
    //     $data = $req->all();
    //     Register::where(['kode_barang'=>$data['kodebarang']])->update([
    //         'status'=>$data['status'],
    //         'digunakan'=>$data['digunakan'],  
    //     ]); 
    //     return redirect()->back();
    // }


    
    // public function ajaxregister(Request $req){
    //     $a = Barang::where(['id'=>$req->id])->get();
    //     $f = Barang::join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
    //     ->select('*','barangs.id as id_barang')
    //     ->get();
    //     foreach ($a as $A) {
    //         $b = $A['bidang_kg'];
    //         $c = $A['tahun_perolehan'];
    //         $d = $A['jumlah'];
    //         $e = $A['satuan'];
    //         }
    //      foreach ($f as $F) {
    //         $g = $F['kelompok'];
    //         }
    //     $msg1 = "13.06.06.2001 ".$b." ".$c;
    //     $msg2 = "$g";
    //     $msg3 = "$d";
    //     $msg4 = "$e";
    //     return response()->json(['label1'=>$msg1,'label2'=>$msg2,'jumlah'=>$msg3,'satuan'=>$msg4]);
    //     }
    // public function register(Request $request){
    //     $data = $request->all();
    //     $a = new Register;
    //     $a->barang = $data['barang'];
    //     $a->label_1 = $data['label1'];
    //     $a->label_2 = $data['label2'].$data['urut'];
    //     $a->status = $data['status'];
    //     $a->save();
    //     return redirect()->back();
    // }
    public function penggunaanBarang(){
        $a = Register::join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','registers.id_reg as id_register')
        ->get();
        $b = Perangkat::get();
        // $c = Rpjm_rkp::get();
        return view('user.penggunaan')->with(compact('a','b'));
    }
    public function penggunaanShow(){
        $a = Penggunaan::join('registers', 'penggunaans.kode_barang', '=', 'registers.id_reg')
        ->join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','penggunaans.id_pengg as id_penggunaan')
        ->get();
        return view('user.penggunaan_show', ['a'=>$a]);
    }
     public function penggunaanShowedit($id){
        $a = Penggunaan::join('registers', 'penggunaans.kode_barang', '=', 'registers.id_reg')
        ->join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->join('perangkats', 'penggunaans.penanggung_jawab', '=', 'perangkats.nip')
        ->select('*','penggunaans.id_pengg as id_penggunaan')
        ->where(['id_pengg'=>$id])
        ->get();
        $b = Perangkat::get();
        return view('user.penggunaan_edit', ['a'=>$a] ,['b'=>$b]);
    }
     public function penggunaanEdit(Request $req){
        $data = $req->all();
        Penggunaan::join('perangkats', 'penggunaans.penanggung_jawab', '=', 'perangkats.nip')
        ->select('*','penggunaans.id_pengg as id_penggunaan')
        ->where(['id_pengg'=>$data['id']])->update([
            'tahun_penggunaan'=>$data['thpengg'],
            'penanggung_jawab'=>$data['pj'],
            'kegunaan'=>$data['kegunaan'],
            'keterangan_guna'=>$data['keterangan']    
        ]); 
        return redirect('/penggunaanShow');
    }
    public function penggunaanHapus($id){
        Penggunaan::where('id_pengg',$id)->delete();
        return redirect('/penggunaanShow');
    }
    public function penggunaan(Request $request){
        $data = $request->all();
        $a = new Penggunaan;
        Register::where('id_reg',$request->barang)
        ->update(['status' => "Digunakan"]);
        $a->kode_barang = $data['barang'];
        $a->kode_desa = $data['kodedesa'];
        $a->penanggung_jawab = $data['pj'];
        $a->kegunaan = $data['kegunaan'];
        $a->tahun_penggunaan = $data['thpeng'];
        $a->keterangan_guna = $data['keterangan'];
        $a->save();
        return redirect()->back();
    }
    public function penghapusanBarang(){
        $a = Register::join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','registers.id_reg as id_hapus')
        ->get();
        return view('user.penghapusan')->with(compact('a'));
    }   
    public function penghapusanShow(){
       $a = Penghapusan::join('registers', 'penghapusans.barang', '=', 'registers.id_reg')
        ->join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','penghapusans.id_hapus as id_hapus')
        ->get();
        return view('user.penghapusan_show', ['a'=>$a]);
    }
    public function penghapusanShowedit($id){
        $a = Penghapusan::join('registers', 'penghapusans.barang', '=', 'registers.id_reg')
        ->join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','penghapusans.id_hapus as id_hapus')
        ->where(['id_hapus'=>$id])
        ->get();
        return view('user.penghapusan_edit', ['a'=>$a]);
    }
    public function penghapusanEdit(Request $req){
        $data = $req->all();
        Penghapusan::where(['id_hapus'=>$data['id']])->update([
            'penyebab'=>$data['penyebab'],
            'sk_bupati'=>$data['skbupati'],
            'keterangan_hapus'=>$data['keterangan']    
        ]); 
        return redirect('/penghapusanShow');
    }
    public function penghapusan(Request $request){
        $data = $request->all();
        $b = new Penghapusan;
        Penghapusan::join('registers', 'penghapusans.barang', '=', 'registers.id_reg')
        ->where('id_hapus',$request->barang)->update(['stat_hapus' => "Deleted"]);
        $b->barang = $data['barang'];
        $b->no_beritaacara = $data['noba'];
        $b->tanggal = $data['tanggal'];
        $b->penyebab = $data['penyebab'];
        $b->sk_bupati = $data['skbupati'];
        $b->keterangan_hapus = $data['keterangan'];
        $b->save();
        return redirect()->back();
    }
    public function laporanBarang(){
        $a = Barang::join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','barangs.id_brg as id_barang')
        ->get();
        return view('user.laporan_barang', ['a'=>$a]);
    }
    public function laporanPenghapusan(){
        $a = Penghapusan::join('registers', 'penghapusans.barang', '=', 'registers.id_reg')
        ->join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','penghapusans.id_hapus as id_hapus')
        ->get();
        return view('user.laporan_penghapusan', ['a'=>$a]);
    }
    public function laporanKetersediaan(Request $req){
        $a = Register::where(['status'=>"Belum Digunakan"])
        ->join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','registers.id_reg as id_regist')
        ->paginate(10);
        // $b =Register::where(['status'=>"Belum Digunakan"])::count();
        return view('user.laporan_ketersediaan', ['a'=>$a]);
    }
    public function laporanPenanggungjawab(Request $req){
       $a = Penggunaan::join('registers', 'penggunaans.kode_barang', '=', 'registers.id_reg')
        ->join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->join('perangkats', 'penggunaans.penanggung_jawab', '=', 'perangkats.nip')
        ->select('*','penggunaans.id_pengg as id_penggunaan')
        ->paginate(10);
        return view('user.laporan_pj', ['a'=>$a]);
    }
    // public function edit_register (Request $req){
    //     $data = $req->all();
    //     Register::where(['kode_barang'=>$data['kodebarang']])->update([
    //         'status'=>$data['status'],
    //         'digunakan'=>$data['digunakan'],  
    //     ]); 
    //     return redirect()->back();
    public function panduanAplikasi(){
        return view('user.panduan');
    }

    //Cetak Pdf
    public function pdfBarang(){
        $barang = Barang::join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','barangs.id_brg as id_barang')
        ->get(); 
        $pdf = PDF::loadview('user.laporan_barang_cetak',['barang'=>$barang]);
        return $pdf->stream('laporan-barang-pdf');
    }
    public function pdfLabel(){
        $label = Register::join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','registers.id_reg as id_regist')
        ->get();
        $pdf = PDF::loadview('user.laporan_label_cetak',['label'=>$label]);
        return $pdf->stream('laporan-label-pdf');
    }
    public function pdfPenghapusan(){
        $hapus = Penghapusan::join('registers', 'penghapusans.barang', '=', 'registers.id_reg')
        ->join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','penghapusans.id_hapus as id_hapus')
        ->get(); 
        $pdf = PDF::loadview('user.laporan_hapus_cetak',['hapus'=>$hapus]);
        return $pdf->stream('laporan-hapus-pdf'); 
    }
    public function pdfKetersediaan(){
        $kt = Register::where(['status'=>"Belum Digunakan"])
        ->join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->select('*','registers.id_reg as id_regist')
        ->get();
        $pdf = PDF::loadview('user.laporan_ketersediaan_cetak', ['kt'=>$kt]);
        return $pdf->stream('laporan-ketersediaan-pdf');
    }
    public function pdfPenanggungjawab(){
        $pj = Penggunaan::join('registers', 'penggunaans.kode_barang', '=', 'registers.id_reg')
        ->join('barangs', 'registers.kode_brg', '=', 'barangs.id_brg')
        ->join('jenis_barangs', 'barangs.kode_jenisbrg', '=', 'jenis_barangs.id')
        ->join('perangkats', 'penggunaans.penanggung_jawab', '=', 'perangkats.nip')
        ->select('*','penggunaans.id_pengg as id_penggunaan')
        ->get();
         $pdf = PDF::loadview('user.laporan_pj_cetak',['pj'=>$pj]);
        return $pdf->stream('laporan-pjs-pdf');
    }

}
