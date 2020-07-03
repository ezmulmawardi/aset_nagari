@extends('layout_user.header1') 
@section('content')  
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <span>Home/Penghapusan</span>
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
                      Penghapusan Barang
                    </h6>
                    <div class="row justify-content-sm-end">
                      <div class="col-sm-6">
                        <form class="form-inline justify-content-sm-end">
                          <a href="{{route('penghapusanBarang')}}" class="btn btn-success btn-md" target="_blank">TAMBAH</a>
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
                                Label
                              </th>
                              <th>
                                Nama Barang
                              </th>
                              <th>
                                Tanggal Dihapus
                              </th>
                              <th>
                                Penyebab
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
                                {{ $A->tanggal }}
                              </td>
                              <td align="center">
                                {{ $A->penyebab }}
                              </td>  
                              <td align="center">
                                {{ $A->keterangan_hapus }}
                              </td>
                              <td align="">
                                <a href="{{ url('penghapusanShowedit/'.$A->id_hapus) }}" class="btn btn-primary btn-sm">EDIT</a>
                                {{-- <a href="{{ {{ url('/hapus_all/1/'.$A->id) }} --}} {{-- onclick="return confirm('Yakin mau hapus data ini ?')" class="btn btn-danger btn-sm">HAPUS</a> --}}
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
@include('layout_user.script')
@endsection
                     
