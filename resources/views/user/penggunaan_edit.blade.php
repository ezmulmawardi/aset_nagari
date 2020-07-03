@extends('layout_user.header1') 
@section('content')  

<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Penggunaan/Edit</span>
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
            Edit Penggunaan
          </h6>
        <h2 ><center>Penggunaan Barang</center></h2><br/>
            <form id="formValidate" method="post" action="{{ url('/penggunaanEdit') }}">
              @foreach($a as $A)
              @csrf
              <input type="hidden" name="id" value="{{ $A->id_pengg }}">
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Barang:</label>
                    <input type="text" class="form-control" name="barang" value="{{ $A->nama_barang }}" readonly>
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
                    <label>Nomor Keputusan:</label>
                    <input type="text" class="form-control" name="nokep" value="{{ $A->no_kep }}" readonly>
                  </div>
                </div> --}}
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Tahun Penggunaan:</label>
                    <input type="text" class="form-control" name="thpengg" value="{{ $A->tahun_penggunaan }}" >
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Penanggung Jawab : <b>{{ $A->nama }}</b></label>
                    <select required="" name="pj" class="form-control select2" style="width: 100%;" >
                      <option value="{{ $A->nip }}" selected="selected" >Pilih</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Kegunaan:</label>
                    <input type="text" class="form-control" value="{{ $A->kegunaan }}" name="kegunaan">
                  </div>
                </div>
               {{--  <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Jumlah:</label>
                    <input type="text" class="form-control" name="jumlah" value="{{ $A->jumlah }}">
                  </div>
                </div> --}}
                <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label> Keterangan</label>
                      <input type="text" class="form-control" name="keterangan" value="{{ $A->keterangan_guna }}">
                    </div>
                  </div>
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