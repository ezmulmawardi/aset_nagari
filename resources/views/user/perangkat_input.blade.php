@extends('layout_user.header1')
@section('content')
<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Perangkat Desa</span>
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
            Perangkat Desa
          </h6>
  <div class="container">
    <h2 ><center>Input Data Perangkat Desa</center></h2><br/>
      <form id="formValidate" method="post" action="{{ url('/perangkatInput') }}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label>Nip:</label>
            <input type="text" class="form-control" name="nip">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Nama:</label>
              <input type="text" class="form-control" name="nama">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Jabatan:</label>
              <input type="text" class="form-control" name="jabatan">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
@include('layout_user.script')
@endsection