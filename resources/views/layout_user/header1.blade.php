<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
  <head> 
    <title>Sistem Informasi Aset</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="admin/favicon.png" rel="shortcut icon">
    <link href="admin/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="{!! asset('user/bower_components/select2/dist/css/select2.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/dropzone/dist/dropzone.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/fullcalendar/dist/fullcalendar.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/slick-carousel/slick/slick.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/css/main.css" rel="stylesheet') !!}">
  </head>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
      <div class="layout-w">
        @include('layout_user.header_mobile')
        <!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logo-w">
            <a class="logo" href="#">
              <!-- <div class="logo-element"></div> -->
              <div class="logo-label">
                <a href="{{route('home')}}">SISTEM INFORMASI ASET</a>
              </div>
            </a>
          </div>
          <div class="logged-user-w avatar-inline">
            <div class="logged-user-i">
              <div class="avatar-w">
                <img alt="" src="user/img/avatar1.jpg">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  USER
                </div> 
                <div class="logged-user-role">
                  <!-- Pengurus -->
                </div>
              </div>
              <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
              </div>
              <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                  <div class="avatar-w">
                    <img alt="" src="user/img/avatar1.jpg">
                  </div>
                  <div class="logged-user-info-w">
                    <div class="logged-user-name">
                      USER
                    </div>
                    <div class="logged-user-role">
                      <!-- Pengurus -->
                    </div>
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                      <li>
                        <a href="{{ url('/pengaturan') }}"><i class="os-icon os-icon-ui-46"></i><span>Pengaturan</span></a>
                      </li>
                      <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                      </li>
                    </ul>
              </div>
            </div> 
          </div>
          <ul class="main-menu">
              <li class="has-sub-menu">
                <a>
                  <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                  </div>
                  <span>Aset Nagari</span></a>
                  <ul class="sub-menu">
                    <li>
                      <a href="{{route('perangkatShow')}}">Perangkat Desa</a>
                    </li>
                    <li>
                      <a href="{{route('bidangkgShow')}}">Bidang Kegiatan</a>
                    </li>
                  </ul>
              </li>
              <li class="has-sub-menu">
                <a>
                  <div class="icon-w">
                    <div class="os-icon os-icon-layers"></div>
                  </div>
                  <span>Inventaris Barang</span></a>
                <ul class="sub-menu">
                  {{-- <li>
                    <a href="{{route('perencanaanShow')}}">Perencanaan Barang</a>
                  </li> --}}
                  <li>
                    <a href="{{route('pengadaanShow')}}">Pengadaan Barang</a>
                  </li>
                  <li>
                    <a href="{{route('registerShow')}}">Register Barang </a>
                  </li>
                  <li>
                    <a href="{{route('penggunaanShow')}}">Penggunaan Barang </a>
                  </li>
                  <li>
                    <a href="{{route('penghapusanShow')}}">Penghapusan Barang </a>
                  </li>
                </ul>
                <li class="has-sub-menu">
                  <a>
                  <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                  </div>
                  <span>Laporan Aset</span></a>
                  <ul class="sub-menu">
                  <li>
                    <a href="{{route('laporanBarang')}}">Buku Barang Tahunan</a>
                  </li>
                  <li>
                    <a href="{{route('laporanPenghapusan')}}">Laporan Penghapusan Aset</a>
                  </li>
                  <li>
                    <a href="{{route('laporanKetersediaan')}}">Laporan Ketersediaan Aset</a>
                  </li>
                  <li>
                    <a href="{{route('laporanPenanggungjawab')}}">Laporan Penanggung Jawab Aset</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="{{route('panduanAplikasi')}}">
                  <div class="icon-w">
                    <div class="os-icon os-icon-life-buoy"></div>
                  </div>
                  <span>Panduan Aplikasi</span></a>
              </li>
        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
        @yield('content')