@extends('layout_user.header1') 
@section('content') 
 <!--------------------
 START - Breadcrumbs
 -------------------->
 <ul class="breadcrumb">
   <li class="breadcrumb-item">
    <span>Home/Register</span>
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
            Edit Register
          </h6>
            <h2 ><center>Register Barang</center></h2><br/>
              <form id="formValidate" method="post" action="{{ url('/editRegister') }}">              
              @csrf
                  <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label>Status Label:</label>
                        <select class="form-control" name="status">
                          <option value=''>Pilih</option>
                          <option value='Sudah'>Sudah</option>
                          <option value='Belum'>Belum</option>
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4"></div>
                      <div class="form-group col-md-4">
                        <label> Kegunaan:</label><textarea class="form-control" rows="3" placeholder="" name="kegunaan"></textarea>
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4" style="margin-top:60px">
                      <button type="submit" class="btn btn-success">Update</button>
                    </div>
                  </div>              
              </form>
            </div>
          </div>  
        </div>
      </div>
    </div>
@include('layout_user.script')
@endsection