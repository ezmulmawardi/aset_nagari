@extends('layout_user.header1')
@section('content')
<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home</span>
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
            Data Pengadaan Barang
          </h6>
{{-- <div class="row justify-content-sm-end">
                      <div class="col-sm-6">
                        <form class="form-inline justify-content-sm-end">
                          <input id="search" class="form-control form-control-sm rounded bright" placeholder="Cari" type="text">
                        </form>
                      </div>
                    </div>
                  </div> --}}
            <div class="table-responsive">
            <table class="table table-bordered table-lg table-v2 table-striped">
                <thead>
                  <tr>
                    <th width="4%">
                      No
                    </th> 
                    <th>
                      Kode
                    </th>
                     <th id="nama_barang">
                      Nama Barang
                    </th>
                    <th>
                      Jumlah
                    </th>
                    <th>
                      Keterangan
                    </th>
                  </tr>
                </thead>
                <tbody id="#myTable">
                  <?php $no=1; ?>
                  @foreach($barang as $A)
                  <tr class="showbrg">
                    <td>
                      <?php echo $no++; ?>  
                    </td>
                    <td align="center">
                      {{ $A->kode_jenisbrg }}-{{ $A->id_brg }}
                    </td>
                    <td align="center">
                  	{{ $A->nama_barang }}
                    </td>
                    <td align="center">
                    {{ $A->jumlah }} {{ $A->satuan }}
                    </td>
                    <td align="center">
                      {{ $A->keterangan }}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

@include('layout_user.script')
@endsection

