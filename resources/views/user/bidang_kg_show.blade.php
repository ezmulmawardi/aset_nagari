@extends('layout_user.header1') 
@section('content') 
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <span>Home/Bidang Kegiatan</span>
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
                      Bidang Kegiatan
                    </h6>
                    <div class="row justify-content-sm-end">
                      <div class="col-sm-6">
                        <form class="form-inline justify-content-sm-end">
                          <a href="{{route('bidangkgInput')}}" class="btn btn-success btn-md" target="_blank">TAMBAH</a>
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
                                Nama
                              </th>
                              <th>
                                Actions
                              </th>
                            </tr>
                          </thead>
                          <tbody id="#myTable">
                            <?php $no=1; ?>
                            @foreach($a as $A)
                            <tr class="Perangkat">
                              <td>
                                <?php echo $no++; ?>
                              </td>
                              <td align="center">
                                {{ $A->nama }}
                              </td>
                              <td align="center">
                               <a href="{{ url('bidangkgShowedit/'.$A->kode_kg) }}" class="btn btn-primary btn-md">EDIT</a>
                               {{-- <a href="{{ url('/hapus_bidangkg/1/'.$A->kode_kg) }}" onclick="return confirm('Yakin mau hapus data ini ?')" class="btn btn-danger btn-md">HAPUS</a> --}}
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
{{ $a->links() }}
@include('layout_user.script')
@endsection
                     
