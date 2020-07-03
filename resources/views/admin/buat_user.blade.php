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
              <a href="index.php">Lihat User</a>
            </li>
            <li class="breadcrumb-item">
              <span>Buat User</span>
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
                      Buat User
                    </h6>
                    <div class="element-box-tp">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="element-wrapper">
                            <div class="element-box">
                              <form id="formValidate" action="{{ url('tambahuser') }}">
                                @csrf
                                <div class="form-desc">
                                  Semua data wajib diisi.
                                </div>
                                <div class="form-group">
                                  <label for=""> Nama</label><input class="form-control" name="nama" data-error="Nama wajib diisi" placeholder="nama" required="required" type="text">
                                  <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="form-group">
                                  <label for=""> Username</label><input class="form-control" name="username" data-error="Username wajib diisi" placeholder="username" required="required" type="text">
                                  <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for=""> Password</label><input class="form-control" name="pass" data-minlength="6" placeholder="Password" required="required" type="password">
                                      <div class="help-block form-text text-muted form-control-feedback">
                                        Minimum of 6 characters
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="">Confirm Password</label><input class="form-control" name="cpass" data-match-error="Passwords don&#39;t match" placeholder="Confirm Password" required="required" type="password">
                                      <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-buttons-w">
                                  <button class="btn btn-primary" type="submit"> Submit</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
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
    @include('layout_admin.script')
  </body>
</html>
@endsection
