@extends('layout_user.header1') 
@section('content') 
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <span>Home/PERENCANAAN</span>
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
                      Perencanaan Barang
                    </h6>
                  
                    <!-- ========================= -->
                    <div class="element-box-tp">
                    <!--------------------
                      START - Table with actions
                      ------------------  -->
                          <div class="col-sm-6">
                            <form class="form-inline left-content-sm-end">
                              <a href="{{route('perencanaanBarang')}}" class="btn btn-success btn-md">TAMBAH</a>
                              <input id="search" class="form-control form-control-sm rounded bright" placeholder="Cari" type="text">
                            </form>
                          </div>
                        </div>
                      <div class="table-responsive">
                        <table class="table table-bordered table-lg table-v2 table-striped">
                          <thead>
                            <tr>
                              <th width="4%">
                                No
                              </th> 
                              <th>
                                Kegiatan
                              </th>
                              <th>
                                Lokasi
                              </th>
                              <th>
                                Perkiraan Jumlah
                              </th>
                              <th>
                                Perkiraan Biaya
                              </th>
                              <th>
                                Actions
                              </th>
                            </tr>
                          </thead>
                          <tbody id="#myTable">
                            <?php $no=1; ?>
                            @foreach($a as $A)
                            <tr class="Perencanaan">
                              <td>
                                <?php echo $no++; ?>
                              </td>
                              <td align="center">
                                {{ $A->jenis_kegiatan }}
                              </td>
                              <td align="center">
                                {{ $A->lokasi }}
                              </td>
                              <td align="center">
                                {{ $A->perkiraan_volume }}  {{ $A->satuan }}
                              </td>
                              <td align="center">
                                {{ $A->perkiraan_biaya }}
                              </td>   
                              <td align="center">
                                <a href="{{-- {{ url('edit_all/1/'.$A->id) }} --}}" class="btn btn-primary btn-md">EDIT</a>
                                <a href="{{-- {{ url('/hapus_all/1/'.$A->id) }} --}}" onclick="return confirm('Yakin mau hapus data ini ?')" class="btn btn-danger btn-md">HAPUS</a>
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
                      <div class="controls-below-table">
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
                      </div>
                      <!--------------------
                      END - Controls below table
                      -------------------->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>
  </div>
</div>
@include('layout_user.script')
@endsection
                     
