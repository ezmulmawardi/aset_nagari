@extends('layout_user.header1')
@section('content')   

<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Pengadaan/Edit</span>
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
            Edit Pengadaan
          </h6>
        <h2 ><center>Pengadaan Barang</center></h2><br/>
            <form id="formValidate" method="post" action="{{ url('/pengadaanEdit') }}">
              @foreach($a as $A)
              @csrf
              <input type="hidden" name="id" value="{{ $A->id_brg }}">
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Barang:</label>
                    <input type="text" class="form-control" name="barang" value="{{ $A->nama_barang }}" readonly>
                  </div>
                </div>
              {{-- <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label >Asal Usul Aset: {{ $A->asal_barang }}</label>
                  <select name="asal" class="form-control">
                    <option value=''>Pilih</option>
                     <option value='apbdesa'>Apb Desa</option>
                     <option value='kekayaan desa'>Kekayaan Desa</option>
                     <option value='lainnya'>lainnya</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Bidang Kegiatan: {{ $A->nama }}</label>
                    <select required="" name="bidangkg" class="form-control select2" style="width: 100%;">
                      <option value="" selected="selected">Pilih</option>
                    </select>
                  </div>
                </div> --}}
               {{-- <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Jumlah:</label>
                    <input type="text" class="form-control" name="jumlah" placeholder="jumlah tidak dapat diubah">
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Satuan:</label>
                    <input type="text" class="form-control" name="satuan" value="{{ $A->satuan }}">
                  </div>
                </div> --}}
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Tahun Perolehan:</label>
                    <input type="number" class="form-control" name="thperolehan" value="{{ $A->tahun_perolehan }}">
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
                    <input type="text" class="form-control" name="perbupno" value="{{ $A->perbup_no }}">
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Perbup Tahun:</label>
                    <input type="text" class="form-control" name="perbupth" value="{{ $A->perbup_thn }}">
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label> Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="{{ $A->keterangan }}">
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-top:60px">
                  <button type="submit" class="btn btn-success" >Update</button>
                </div>
              </div>
               @endforeach
              </form>
            </div>
          </div>  
        </div>
      </div>
    </div>
    <script src="{!! asset('user/bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script src="{!! asset('user/bower_components/select2/dist/js/select2.min.js') !!}"></script>
    <script src="{!! asset('user/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    <script>
      $(document).ready(function(){
        $('.select2').select2();

        // if($('select[name="barang"] option').val()==""){
        //   $(this).remove();
        // }
          @foreach($b as $B)
          $('select[name="bidangkg"]').append('<option value="{!!$B->kode!!}">{!!$B->nama!!}</option>')
        @endforeach

        // $('option').remove()

        // $('select').change(function(){
        //   alert($('select').val());
        // })
      });
    </script>
@include('layout_user.script')
@endsection