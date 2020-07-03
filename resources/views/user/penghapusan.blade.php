@extends('layout_user.header1') 
@section('content')
<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Penghapusan</span>
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
            Penghapusan
          </h6>
          <h2 ><center>Penghapusan Aset</center></h2><br/>
          <form id="formValidate" method="post" action="{{ url('/penghapusanBarang') }}">
            @csrf
            <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Barang</label>
                  <select required="" name="barang" class="form-control select2" style="width: 100%;">
                    <option value="" selected="selected">Pilih Barang</option>
                  </select>
                </div>
              </div>
              <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Nomor Berita Acara:</label>
                  <input type="text" class="form-control" name="noba">
                </div>
              </div>
            <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Tanggal:</label>
                  <input type="date" class="form-control" name="tanggal">
                </div>
              </div>
              {{-- <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Jumlah Barang:</label>
                  <input type="number" class="form-control" name="">
                </div>
              </div> --}}
              {{-- <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Jumlah dihapus</label>
                  <input type="number" class="form-control" name="jumlahhapus">
                </div>
              </div> --}}
              <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Penyebab:</label>
                  <input type="text" class="form-control" name="penyebab">
                </div>
              </div>
              <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label>Surat Keputusan Bupati:</label>
                  <input type="text" class="form-control" name="skbupati">
                </div>
              </div>
              <div class="row">
              <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label> Keterangan</label><textarea class="form-control" rows="3" placeholder="Keterangan" name="keterangan"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-top:60px">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
       <script src="{!! asset('user/bower_components/jquery/dist/jquery.min.js') !!}"></script>
        <script src="{!! asset('user/bower_components/select2/dist/js/select2.min.js') !!}"></script>
        <script src="{!! asset('user/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
        <script>
          $(document).ready(function(){
            $('.select2').select2();          

            @foreach($a as $A)
              $('select[name="barang"]').append('<option value="{!!$A->id_reg!!}"> {!!$A->kode_jenisbrg!!}.{!!$A->label!!}-{!!$A->nama_barang!!}++{!!$A->stat_hapus!!}++</option>')
            @endforeach
          });
        </script>
      </form>
    </div>
  </div>
</div>
</div>
</div>
    @include('layout_user.script')
    @endsection