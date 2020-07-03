@extends('layout_user.header1') 
@section('content')  
<!-------------------- 
START - Breadcrumbs
-------------------->
<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Pengadaan/Detail</span>
  </li>
</ul>
<!-------------------- 
END - Breadcrumbs
-------------------->
<div class="content-panel-toggler">
  <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
</div>
<div class="content-i">
  <div class="content-box">
    <div class="row">
      <div class="col-sm-12">
        <div class="element-wrapper">
          <h6 class="element-header">
            Detail Pengadaan Barang
          </h6>
          <h2 ><center>Detail Pengadaan Barang</center></h2><br/>
          @foreach($a as $A)
              @csrf
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Kode Barang:</label>
                    <input type="text" class="form-control" name="" value="{{ $A->kode_jenisbrg }}-{{ $A->id_brg }}" readonly>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Barang:</label>
                    <input type="text" class="form-control" name="" value="{{ $A->nama_barang }}" readonly>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Asal Usul Aset:</label>
                    <input type="text" class="form-control" name="" value="{{ $A->asal_barang }}" readonly>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Bidang Kegiatan:</label>
                    <input type="text" class="form-control" name="" value="{{ $A->nama }}" readonly>
                  </div>
                </div>
               <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Jumlah:</label>
                    <input type="text" class="form-control" name="" value="{{ $A->satuan }}" readonly>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Tahun Perolehan:</label>
                    <input type="number" class="form-control" name="" value="{{ $A->tahun_perolehan }}" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Peraturan:</label>
                    <input type="text" class="form-control" placeholder="Permendagri Nomor 1 Tahun 2016" readonly="">
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Perbup Nomor:</label>
                    <input type="text" class="form-control" name="" value="Nomor{{ $A->perbup_no }} Tahun {{ $A->perbup_thn }}" readonly>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label> Keterangan</label>
                    <input type="text" class="form-control" name="" value="{{ $A->keterangan }}" readonly>
                  </div>
                </div>
               @endforeach                     
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('layout_user.script')
      @endsection
                     
