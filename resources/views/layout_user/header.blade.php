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
    <link rel="stylesheet" type="text/css" href="{!! asset('user/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">
    <link href="{!! asset('user/bower_components/select2/dist/css/select2.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/dropzone/dist/dropzone.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/fullcalendar/dist/fullcalendar.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/bower_components/slick-carousel/slick/slick.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/css/main.css') !!}" rel="stylesheet">
    <link href="{!! asset('user/css/style.css') !!}" rel="stylesheet">
  </head>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
      <div class="layout-w">
        @include('layout_user.header_mobile')
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          <div class="top-bar color-scheme-transparent">
            <!--------------------
            START - Top Menu Controls
            -------------------->
            <!--------------------
            START - Settings Link in secondary top menu
            -------------------->
            <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left ">
                <a href="{{route('home')}}">HOME</a>

            </div>
            <marquee width="90%"><h2>SELAMAT DATANG DI SISTEM INFORMASI ASET NAGARI BUKIK BATABUAH</h2></marquee>
           
            <!--------------------
            END - Settings Link in secondary top menu 
            -------------------->
            <div class="top-menu-controls">
              <!--------------------
              START - User avatar and menu in secondary top menu
              -------------------->
              <div class="logged-user-w"> 
                <div class="logged-user-i">
                  <div class="avatar-w">
                    <img alt="" src="user/img/avatar1.jpg">
                  </div>
                  <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                      <div class="avatar-w">
                        <img alt="" src="user/img/avatar1.jpg">
                      </div>
                      <div class="logged-user-info-w">
                        <div class="logged-user-name">
                          Nama
                        </div>
                        <div class="logged-user-role">
                          Petugas
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
              <!--------------------
              END - User avatar and menu in secondary top menu
              -------------------->
            </div>
            <!--------------------
            END - Top Menu Controls
            -------------------->
          </div>
          <!--------------------
          END - Top Bar
          -------------------->
          @yield('content')