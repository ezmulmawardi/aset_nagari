@extends('layout_user.header1')
@section('content')  

<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Penghapusan/Edit</span>
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
            Edit Penghapusan
          </h6>
        <h2 ><center>Penghapusan Barang</center></h2><br/>
            <form id="formValidate" method="post" action="{{ url('/penghapusanEdit') }}">
              @foreach($a as $A)
              <input type="hidden" name="id" value="{{ $A->id_hapus }}">
              <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Barang</label>
                  <input type="text" class="form-control" name="barang" value="{{ $A->nama_barang }}" readonly>
                </div>
              </div>
              <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Nomor Berita Acara:</label>
                  <input type="text" class="form-control" name="noba" readonly value="{{ $A->no_beritaacara }}">
                </div>
              </div>
            <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Tanggal:</label>
                  <input type="input" class="form-control" name="tanggal" readonly value="{{ $A->tanggal }}">
                </div>
              </div>
              {{-- <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Jumlah Barang:</label>
                  <input type="number" class="form-control" name="">
                </div>
              </div> --}}
             {{--  <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Jumlah dihapus</label>
                  <input type="number" class="form-control" name="jumlahhapus" value="{{ $A->jumlah_dihapus }}">
                </div>
              </div> --}}
              <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Penyebab:</label>
                  <input type="text" class="form-control" name="penyebab" value="{{ $A->penyebab }}">
                </div>
              </div>
              <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Surat Keputusan Bupati:</label>
                  <input type="text" class="form-control" name="skbupati" value="{{ $A->sk_bupati }}">
                </div>
              </div>
              <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label> Keterangan</label>
                   <input type="text" class="form-control" name="keterangan" value="{{ $A->keterangan_hapus }}">
                </div>
              </div>
                @csrf
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="form-group col-md-4" style="margin-top:60px">
                    <button type="submit" class="btn btn-success">Update</button>
                  </div>
                </div>
                 @endforeach
                </form>
              </div>
            </div>  
          </div>
        </div>
      </div>
  @include('layout_user.script')
  @endsection