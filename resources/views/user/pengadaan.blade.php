@extends('layout_user.header1') 
@section('content')  

<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Pengadaan</span>
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
            Pengadaan
          </h6>
          <h2 ><center>Pengadaan Barang</center></h2><br/>
          <div class="container">
            <form id="formValidate" method="post" action="{{ url('/pengadaanBarang') }}">
              @csrf
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Barang</label>
                    <select name="barang" required="" class="form-control select2" style="width: 100%;">
                      <option value="" selected="selected">Pilih Barang</option>
                    </select>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label >Asal Usul Aset:</label>
                  <select name="asal" class="form-control">
                     <option value='apbdesa'>Apb Desa</option>
                     <option value='kekayaan desa'>Kekayaan Desa</option>
                     <option value='lainnya'>lainnya</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Bidang Kegiatan:</label>
                    <select required="" name="bidangkg" class="form-control select2" style="width: 100%;">
                      <option value="" selected="selected">Pilih</option>
                    </select>
                  </div>
                </div>
               <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Jumlah:</label>
                    <input type="number" class="form-control" name="jumlah">
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Satuan:</label>
                    <input type="text" class="form-control" name="satuan">
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Tahun Perolehan:</label>
                    <select name="thperolehan" class="form-control">
                     <option value=''>Pilih Tahun</option>
                     <option value='2015'>2015</option>
                     <option value='2016'>2016</option>
                     <option value='2017'>2017</option>
                     <option value='2018'>2018</option>
                     <option value='2019'>2019</option>
                     <option value='2020'>2020</option>
                     <option value='2021'>2021</option>
                     <option value='2022'>2022</option>
                     <option value='2023'>2023</option>
                  </select>
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
                    <input type="text" class="form-control" name="perbupno" placeholder="2">
                  </div>
                </div>
                <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Perbup Tahun:</label>
                    <input type="text" class="form-control" name="perbupth" placeholder="2017">
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
                    <button  type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
            </form>
          </div>
          <?
            if(isset($_POST['input'])){
            $jumlah =$_POST['jumlah'];
            return save();
            
            }
          ?>
        
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
                $('select[name="barang"]').append('<option value="{!!$A->id!!}">{!!$A->nama_barang!!}</option>')
              @endforeach
               @foreach($b as $B)
                $('select[name="bidangkg"]').append('<option value="{!!$B->kode_kg!!}">{!!$B->nama!!}</option>')
              @endforeach

              // $('option').remove()

              // $('select').change(function(){
              //   alert($('select').val());
              // })
            });
          </script>
      @include('layout_user.script')
      @endsection