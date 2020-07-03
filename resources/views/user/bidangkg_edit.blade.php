@extends('layout_user.header1')
@section('content') 
<!--------------------
START - Breadcrumbs
-------------------->
<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Bidang Kegiatan/Edit</span>
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
            Edit Bidang Kegiatan
          </h6>
        <h2 ><center>Bidang Kegiatan</center></h2><br/>
         <form id="formValidate" method="post" action="{{ url('/bidangkgEdit') }}">
          @foreach($a as $A)
            @csrf
            <input type="hidden" name="id" value="{{ $A->kode_kg }}">
            <div class="row">
                <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label>Masukkan Bidang Kegiatan:</label>
                    <input type="text" class="form-control" name="bidangkg" value="{{ $A->nama }}">
                  </div>
                </div>              
                 @endforeach
                <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4" style="margin-top:60px">
                  <button type="submit" name="input" class="btn btn-success">Submit</button>
                </div>
              </div>
              </div>
            </div>
          </div>
          </form>
@include('layout_user.script')
@endsection