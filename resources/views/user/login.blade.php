<!DOCTYPE html> 
<html>
  <head>
    <title>Aset Nagari</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="admin/favicon.png" rel="shortcut icon">
    <link href="admin/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="{!! asset('admin/bower_components/select2/dist/css/select2.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet">
    <link href="{!! asset('admin/bower_components/dropzone/dist/dropzone.css') !!}" rel="stylesheet">
    <link href="{!! asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('admin/bower_components/fullcalendar/dist/fullcalendar.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('admin/bower_components/slick-carousel/slick/slick.css') !!}" rel="stylesheet">
    <link href="{!! asset('admin/css/main.css" rel="stylesheet') !!}">
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="admin/img/logo-big.png"></a>
          <h4>SISTEM INFORMASI ASET NAGARI</h4>
        </div>
        <h4 class="auth-header">
          Login
        </h4>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <label for="">Username</label>
            <input class="form-control" name="username" placeholder="Enter your username" type="text" required="">
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">Password</label><input name="password" class="form-control" placeholder="Enter your password" type="password" required="">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="buttons-w" align="center">
            <button type="submit" class="btn btn-primary" >Masuk</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
