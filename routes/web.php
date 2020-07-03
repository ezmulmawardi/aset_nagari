<?php  
 
/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();  
// admin
Route::get('/', 'IndexController@index')->name('adminHome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/buatuser', 'AdminController@buatuser');
Route::match(['get','post'],'/tambahuser', 'AdminController@tambahuser');
Route::match(['get','post'],'/hapus_user/{id}', 'AdminController@hapus');
Route::get('/ubahpass', 'AdminController@ubahpass');
Route::match(['get','post'],'/ubahpassx', 'AdminController@ubahpassx');

// user 
Route::get('/pengaturan', 'UserController@pengaturan');
Route::get('/perangkatShow', 'UserController@perangkatShow')->name('perangkatShow');	
Route::get('/bidangkgShow', 'UserController@bidangkgShow')->name('bidangkgShow');
Route::get('/perangkatInput', 'UserController@perangkatInput')->name('perangkatInput');
Route::get('/bidangkgInput', 'UserController@bidangkgInput')->name('bidangkgInput');
Route::get('/perencanaanShow', 'UserController@perencanaanShow')->name('perencanaanShow');
Route::get('/perencanaanBarang', 'UserController@perencanaanBarang')->name('perencanaanBarang');
Route::get('/pengadaanBarang', 'UserController@pengadaanBarang')->name('pengadaanBarang');
Route::get('/pengadaanShow', 'UserController@pengadaanShow')->name('pengadaanShow');
Route::get('/registerBarang', 'UserController@registerBarang')->name('registerBarang');
Route::get('/registerShow', 'UserController@registerShow')->name('registerShow');
Route::get('/penggunaanBarang', 'UserController@penggunaanBarang')->name('penggunaanBarang');
Route::get('/penggunaanShow', 'UserController@penggunaanShow')->name('penggunaanShow');
Route::get('/peminjamanBarang', 'UserController@peminjamanBarang')->name('peminjamanBarang');
Route::get('/penghapusanBarang', 'UserController@penghapusanBarang')->name('penghapusanBarang');
Route::get('/penghapusanShow', 'UserController@penghapusanShow')->name('penghapusanShow');
Route::get('/laporanBarang', 'UserController@laporanBarang')->name('laporanBarang');
Route::get('/laporanPenghapusan', 'UserController@laporanPenghapusan')->name('laporanPenghapusan');
Route::get('/laporanKetersediaan', 'UserController@laporanKetersediaan')->name('laporanKetersediaan');
Route::get('/laporanPenanggungjawab', 'UserController@laporanPenanggungjawab')->name('laporanPenanggungjawab');
Route::get('/panduanAplikasi', 'UserController@panduanAplikasi')->name('panduanAplikasi');

//pencarian
// Route::get('/registerShow/cari','PegawaiController@registerShowcari');

//hapus
Route::get('/hapus_all/{id}/{kode}', 'UserController@hapus_perangkat');
Route::get('/penggunaanHapus/{id}','UserController@penggunaanHapus');
// Route::get('/hapus_bidangkg/{id}/{kode}', 'UserController@hapus_bidangkg');

//edit 
Route::get('/bidangkgShowedit/{id}', 'UserController@bidangkgShowedit');
Route::get('/pengadaanShowedit/{id}', 'UserController@pengadaanShowedit');
Route::get('/pengadaanShowdetail/{id}', 'UserController@pengadaanShowdetail');
Route::get('/registerShowedit/{id}', 'UserController@registerShowedit');
Route::get('/penggunaanShowedit/{id}', 'UserController@penggunaanShowedit');
Route::get('/penghapusanShowedit/{id}', 'UserController@penghapusanShowedit');
// Route::post('/editRegister', 'UserController@edit_register'); //????
Route::post('/bidangkgEdit', 'UserController@bidangkgEdit');
Route::post('/pengadaanEdit', 'UserController@pengadaanEdit');
Route::post('penggunaanEdit', 'UserController@penggunaanEdit');
Route::post('/penghapusanEdit', 'UserController@penghapusanEdit');

//update
Route::get('/perangkatStatUpdate/{id}', 'UserController@perangkatStatUpdate');
Route::get('/perangkatStatUpdateA/{id}', 'UserController@perangkatStatUpdateA');

//kirim data inputan
Route::post('/perangkatInput', 'UserController@perangkat');
Route::post('/perencanaanBarang', 'UserController@perencanaan');
Route::post('/bidangKg', 'UserController@bidangKg');
Route::post('/pengadaanBarang', 'UserController@pengadaan');
Route::post('/registerBarang', 'UserController@register');
Route::post('/penggunaanBarang', 'UserController@penggunaan');
Route::post('/penghapusanBarang', 'UserController@penghapusan');
// Route::post('/label1', 'UserController@ajaxregister');

//Pdf Laporan
Route::get('/barang/pdfBarang', 'UserController@pdfBarang');
Route::get('/register/pdfLabel', 'UserController@pdfLabel');
Route::get('/penghapusan/pdfPenghapusan', 'UserController@pdfPenghapusan');
Route::get('/barang/pdfPenanggungjawab', 'UserController@pdfPenanggungjawab');
Route::get('/barang/pdfKetersediaan', 'UserController@pdfKetersediaan');