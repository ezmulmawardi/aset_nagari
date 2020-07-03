@extends('layout_user.header1')
@section('content')
<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Penggunaan</span>
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
            Penggunaan
          </h6>
          <div class="container">
            <h2 ><center>Penggunaan Aset</center></h2><br/>
            <form id="formValidate" method="post" action="{{ url('/penggunaanBarang') }}">
              @csrf
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Barang:</label>
                    <select required="" name="barang" class="form-control select2" style="width: 100%;">
                      <option value="" selected="selected">Pilih Barang</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Kode Desa:</label>
                    <input type="text" class="form-control" name="kodedesa" value="13.06.06.2001" placeholder=" 13.06.06.2001" readonly>
                  </div>
                </div>
               {{--  <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Label:</label>
                    <input type="text" class="form-control" name="label2">
                  </div>
                </div> --}}
                {{-- <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Nomor Keputusan</label>
                    <select required="" name="nokep" class="form-control select2" style="width: 100%;">
                      <option value="" selected="selected">Pilih</option>
                    </select>
                  </div>
                </div> --}}
                <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label >Tahun Penggunaan:</label>
                       <select name="thpeng" class="form-control">
                         <option value='2018'>2018</option>
                         <option value='2019'>2019</option>
                         <option value='2020'>2020</option>
                         <option value='2021'>2021</option>
                         <option value='2022'>2022</option>
                  </select>
                </div>
              </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Penanggung Jawab</label>
                    <select required="" name="pj" class="form-control select2" style="width: 100%;">
                      <option value="" selected="selected">Pilih</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Kegunaan:</label>
                    <input type="text" class="form-control" name="kegunaan">
                  </div>
                </div>
                {{-- <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Jumlah:</label>
                    <input type="text" class="form-control" name="jumlah">
                  </div>
                </div> --}}
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

              // if($('select[name="barang"] option').val()==""){
              //   $(this).remove();
              // }   

               @foreach($a as $A)
                $('select[name="barang"]').append('<option value="{!!$A->id_reg!!}."> {!!$A->kode_jenisbrg!!}.{!!$A->label!!}-{!!$A->nama_barang!!}++{!!$A->status!!}++</option>')
              @endforeach
              @foreach($b as $B)
                $('select[name="pj"]').append('<option value="{!!$B->nip!!}"> {!!$B->nama!!}</option>')
              @endforeach
              // $('option').remove();

              // $('select').change(function(){
              //   alert($('select').val());
              // })
            });
          </script>
      @include('layout_user.script')
      @endsection