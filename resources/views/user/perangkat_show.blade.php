@extends('layout_user.header1')  
@section('content') 
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <span>Home/Daftar Perangkat</span>
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
                      Daftar Perangkat Desa
                    </h6>
                    <div class="row justify-content-sm-end">
                      <div class="col-sm-6">
                        <form class="form-inline justify-content-sm-end">
                          <a href="{{route('perangkatInput')}}" class="btn btn-success btn-md" target="_blank">TAMBAH</a>
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
                                Nip
                              </th>
                              <th>
                                Nama
                              </th>
                              <th>
                                Jabatan
                              </th>
                              <th>
                                Status
                              </th>
                              <th>
                                Ubah Status
                              </th>
                            </tr>
                          </thead>
                          <tbody id="#myTable">
                            <?php $no=1; ?>
                            @foreach($perangkat as $A)
                            <tr class="Perangkat">
                              <td>
                                <?php echo $no++; ?>
                              </td>
                              <td align="center">
                                {{ $A->nip }}
                              </td>
                              <td align="center">
                                {{ $A->nama }}
                              </td>
                              <td align="center">
                                {{ $A->jabatan }}
                              </td>
                              <td align="center">
                                {{ $A->status_p }}
                              </td>
                              <td align="center">
                                @if($A->status_p=="Aktif")
                                <a href="{{ url('perangkatStatUpdate/'.$A->nip) }}" onclick="return confirm('Ubah jadi tidak aktif ?')" class="btn btn-danger btn-md">Tidak Aktif</a>
                                @elseif($A->status_p=="Tidak Aktif")
                                <a href="{{ url('perangkatStatUpdateA/'.$A->nip) }}" onclick="return confirm('Ubah jadi aktif ?')" class="btn btn-primary btn-md">Aktif</a>
                                @endif                                
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
{{ $perangkat->links() }}
@include('layout_user.script')
@endsection
                     
