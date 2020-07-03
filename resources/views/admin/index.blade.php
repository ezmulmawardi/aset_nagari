@extends('layout_admin.header')
@section('content')
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Admin</a>
            </li>
            <li class="breadcrumb-item">
              <span>Lihat User</span>
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
                      Utama
                    </h6>
                    <div class="element-content">
                      <div class="row">
                        <div class="col-sm-4 col-xxxl-3">
                          <a class="element-box el-tablo" href="{{ route('adminHome') }}">
                            <div class="value">
                              Lihat User
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-4 col-xxxl-3">
                          <a class="element-box el-tablo" href="{{ url('/buatuser') }}">
                            <div class="value">
                              Buat User
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-4 col-xxxl-3">
                          <a class="element-box el-tablo" href="{{ url('/ubahpass') }}">
                            <div class="value">
                              Ubah Password Admin
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">
                      User Terdaftar
                    </h6>
                    <div class="element-box-tp">
                    <!--------------------
                      START - Table with actions
                      ------------------  -->
                      <div class="table-responsive">
                        <table class="table table-bordered table-lg table-v2 table-striped">
                          <thead>
                            <tr>
                              <th>
                                Nama
                              </th>
                              <th>
                                Username
                              </th>
                              <th>
                                Actions
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                            <tr>
                              <td>
                                {{ $user->name }}
                              </td>
                              <td class="text-left">
                                {{ $user->username }}
                              </td>
                              <td class="row-actions">
                                <a class="danger" href="{{ url('hapus_user/'.$user->id) }}"><i class="os-icon os-icon-ui-15"></i></a>
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
      <div class="display-type"></div>
    </div>
    @include('layout_admin.script')
    <script type="text/javascript">
    $(document).ready(function(){
      @if (session('statusBerhasil'))
        Swal.fire({
          icon: 'success',
          title: 'Berhasil',
          text: '{{ session('statusBerhasil') }}'
        })
      @endif
      
    })
    </script>
  </body>
</html>
@endsection