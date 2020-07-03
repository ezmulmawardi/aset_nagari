@extends('layout_user.header1')
@section('content')
<ul class="breadcrumb">
  <li class="breadcrumb-item">
    <span>Home/Laporan/Ketersediaan Barang</span>
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
            Data Ketersediaan Barang
          </h6>
            <div class="row justify-content-sm-end">
                <div class="col-sm-6">
                  <form class="form-inline justify-content-sm-end">
                    <a href="/barang/pdfKetersediaan" class="btn btn-primary" target="_blank">CETAK</a>
                    <input id="search" class="form-control form-control-sm rounded bright" placeholder="Cari" type="text">
                  </form>
                </div>
              </div><br>
            <div class="table-responsive">
            <table class="table table-bordered table-lg table-v2 table-striped">
                <thead>
                  <tr>
                    <th width="4%">
                      No
                    </th> 
                    <th>
                      Kode Barang
                    </th>
                    <th>
                      Nama Barang
                    </th>
                    <th>
                      Tahun Diperoleh
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      Asal Barang
                    </th>
                    <th>
                      Peraturan Bupati
                    </th>
                  </tr>
                </thead>
                <tbody id="#myTable">
                  <?php $no=1; ?>
                  @foreach($a as $A)
                  <tr class="Penghapusan">
                    <td>
                       <?php echo $no++; ?>
                    </td>
                    <td align="center">
                       {{ $A->kode_jenisbrg }}.{{ $A->label }}
                    </td>
                    <td align="center">
                       {{ $A->nama_barang }}
                    </td>
                    <td align="center">
                      {{ $A->tahun_perolehan }}
                    </td>
                     <td align="center">
                      {{ $A->status }}
                    </td>
                    <td align="center">
                      {{ $A->asal_barang }}
                    </td>
                    <td align="center">
                      Nomor {{ $A->perbup_no }} Tahun {{ $A->perbup_thn }}
                    </td>
                    @endforeach
                </tbody>
              </table>
            </div>
{{ $a->links() }}
@include('layout_user.script')
@endsection

