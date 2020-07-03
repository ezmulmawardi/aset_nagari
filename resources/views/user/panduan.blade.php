@extends('layout_user.header1')
@section('content')
<!DOCTYPE html>
<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Panduan</span>
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
            Panduan Aplikasi
          </h6>
          
          <html>
          <head>
            <title></title>
          </head>
          <body>
          <div style="text-align: center;">
            <embed src="user/dokumen/PEDUM KODEFIKASI ASET DESA.pdf" width="900" height="600" > </embed>
          </div>
          </body>
          </html>
        </div>
      </div>
    </div>
  </div>
</div>        
@include('layout_user.script')
@endsection