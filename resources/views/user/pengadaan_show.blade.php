@extends('layout_user.header1') 
@section('content')  
          <!-------------------- 
          START - Breadcrumbs
          -------------------->
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
                      Pengadaan Barang
                    </h6>
                    <div class="row justify-content-sm-end">
                    <div class="col-sm-6">
                      <form class="form-inline justify-content-sm-end">
                        <a href="{{route('pengadaanBarang')}}" class="btn btn-success btn-md" target="_blank">TAMBAH</a>
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
                                Jumlah
                              </th>
                              {{-- <th>
                                Perbup
                              </th> --}}
                              <th>
                               Tahun Perolehan
                              </th>
                              <th>
                                Keterangan
                              </th>
                              <th>
                                Actions
                              </th>
                            </tr>
                          </thead>
                          <tbody id="#myTable">
                            <?php $no=1; ?>
                            @foreach($a as $A)
                            <tr class="Pengadaan">
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
                                -
                              </td>
                              {{-- <td align="center">
                                No {{ $A->perbup_no }} tahun {{ $A->perbup_thn }}
                              </td> --}}
                              <td align="center">
                                {{ $A->tahun_perolehan }}  
                              </td>
                              <td align="center">
                                {{ $A->keterangan }}
                              </td>   
                              <td align="center">
                              <a href="{{ url('pengadaanShowedit/'.$A->id_brg) }}" class="btn btn-primary btn-md">EDIT</a>
                              <a href="{{ url('pengadaanShowdetail/'.$A->id_brg) }}" target="_blank" class="btn btn-success btn-md">DETAIL</a>
                              </td>
                            </tr> 
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <!--------------------
                      END - Table with actions
                      ------------------            -->
                      <!--------------------
                      START - Controls below table
                      ------------------  -->
                      {{-- <div class="controls-below-table">
                        <div class="table-records-info">
                          Showing records 1 - 5
                        </div>
                        <div class="table-records-pages">
                          <ul>
                            <li>
                              <a href="#">Previous</a>
                            </li>
                            <li>
                              <a class="current" href="#">1</a>
                            </li>
                            <li>
                              <a href="#">2</a>
                            </li>
                            <li>
                              <a href="#">3</a>
                            </li>
                            <li>
                              <a href="#">4</a>
                            </li>
                            <li>
                              <a href="#">Next</a>
                            </li>
                          </ul>
                        </div>
                      </div> --}}
                      <!--------------------
                      END - Controls below table
                      -------------------->
        </div>
      </div>
    </div>
  </div>
</div>
{{ $a->links() }}
@include('layout_user.script')
@endsection
                     
