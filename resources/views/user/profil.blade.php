@extends('layout_user.header1')
@section('content')
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <span>Pengaturan</span>
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
              <div class="row justify-content-sm-center">
                <div class="col-sm-7">
                  <div class="element-wrapper">
                    <div class="element-box">
                      <form id="formValidate" method="post" action="{{ url('/ubahprofil') }}">
                        @csrf
                        <div class="element-info">
                          <div class="element-info-with-icon">
                            <div class="element-info-icon">
                              <div class="os-icon os-icon-emoticon-smile"></div>
                            </div>
                            <div class="element-info-text">
                              <h5 class="element-inner-header" style="margin-bottom: 0;">
                                Ubah Profil
                              </h5>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          @foreach($users as $user)
                          <label for=""> Nama</label><input class="form-control" data-error="Nama wajib diisi" placeholder="nama" value="{{ $user->name }}" name="nama" required="required" type="text">
                          <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                        <div class="form-group">
                          <label for=""> Username</label><input class="form-control" data-error="Username wajib diisi" placeholder="username" value="{{ $user->username }}" name="username" required="required" type="text" readonly>
                          <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                        <div class="form-buttons-w">
                          <button class="btn btn-primary" type="submit"> Submit</button>
                        </div>
                        @endforeach
                      </form>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-7">
                  <div class="element-wrapper">
                    <div class="element-box">
                      <form id="formValidate" method="post" action="{{ url('/ubahpassU') }}">
                        @csrf
                        <div class="element-info">
                          <div class="element-info-with-icon">
                            <div class="element-info-icon">
                              <div class="os-icon os-icon-robot-2"></div>
                            </div>
                            <div class="element-info-text">
                              <h5 class="element-inner-header" style="margin-bottom: 0;">
                                Ubah Password
                              </h5>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for=""> Password</label><input class="form-control" data-minlength="6" placeholder="Password" name="pass" required="required" type="password">
                              <div class="help-block form-text text-muted form-control-feedback">
                                Minimum of 6 characters
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="">Confirm Password</label><input class="form-control" data-match-error="Passwords don&#39;t match" name="cpass" placeholder="Confirm Password" required="required" type="password">
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
      <div class="display-type"></div>
    </div>
    @include('layout_user.script')
  </body>
</html>
@endsection