@extends('layout_user.header1')
@section('content') 
<!--------------------
START - Breadcrumbs
-------------------->
<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Perencanaan/Edit</span>
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
            Edit Perencanaan
          </h6>
        @if($id==1) 
        <h2 ><center>Perencanaan Barang</center></h2><br/>
          @foreach($a as $A)
            @csrf
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4"> 
                  <label>Nomor Perdes RPJM Desa:</label>
                  <input type="text" class="form-control" name="norpjm" value="{{ $A->kode }}">
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Tanggal Perdes RPJM:</label>
                    <input type="date" class="form-control" name="tglrpjm">
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label >Periode:</label>
                  <select name="periode" class="form-control">
                     <option value='2018-2019'>2018sd2019</option>
                     <option value='2019-2020'>2019sd2020</option>
                     <option value='2020-2021'>2020sd2021</option>
                     <option value='2021-2022'>2021sd2022</option>
                     <option value='2022-2023'>2022sd2023</option>
                  </select>
                </div>
              </div> 
              <!-- RKP START -->
             <h4>Data Rkp Desa</h4>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Nomor Perdes RKP Desa:</label>
                    <input type="text" class="form-control" name="norkp">
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Tanggal Perdes RKP:</label>
                    <input type="date" class="form-control" name="tglrkp">
                  </div>
                </div>
               <!--  RKP END -->
            <div class="container"><br><br>
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
                    <label>Jenis Kegiatan:</label>
                    <input type="text" class="form-control" name="jeniskg">
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Lokasi:</label>
                    <input type="text" class="form-control" name="lokasi">
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Perkiraan Volume:</label>
                    <input type="text" class="form-control" name="perkiraanv">
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="satuan" placeholder="Satuan">
                </div>
              </div>
              <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Perkiraan Biaya:</label>
                    <input type="number" class="form-control" name="perkiraanbiaya">
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label >Sumber biaya:</label>
                  <select name="sumber" class="form-control">
                    <option value='Pendapatan Asli Desa'>Pendapatan Asli Desa</option>
                    <option value='Dana Desa'>Dana Desa</option>
                    <option value='Hasil Pajak dan Retribusi Daerah'>Hasil Pajak dan Retribusi Daerah</option>
                    <option value='Alokasi Dana Desa'>Alokasi Dana Desa</option>
                    <option value='Bantuan Keuangan Provinsi'>Bantuan Keuangan Provinsi</option>
                    <option value='Bantuan Keuangan Kab/Kota'>Bantuan Keuangan Kab/Kota</option>
                    <option value='Pendapatan Lainnya'>Pendapatan Lainnya</option>
                  </select>
                </div>
              </div>
                        @endforeach
                        <div class="form-buttons-w">
                          <button class="btn btn-primary" type="submit"> Submit</button>
                        </div>
              </div>
            </div>
          </div>
          </form>
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
                $('select[name="bidangkg"]').append('<option value="{!!$A->kode!!}"> {!!$A->nama!!}</option>')
              @endforeach
             
              // $('option').remove();

              // $('select').change(function(){
              //   alert($('select').val());
              // })
            });
          </script>
@include('layout_user.script')
@endsection