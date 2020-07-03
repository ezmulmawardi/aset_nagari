@extends('layout_user.header')
@section('content')
	<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2 ><center>Peminjaman Aset</center></h2><br/>
      <!-- <form id="formValidate" method="post" action="{{ url('/penggunaanAset') }}"> -->
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Kode Barang:</label>
            <input type="text" class="form-control" name="kodebr" placeholder="X.XX.XX.XX">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Nama Barang:</label>
              <input type="text" class="form-control" name="namabr">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Jumlah:</label>
              <input type="number" class="form-control" name="jumlah">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Satuan:</label>
              <input type="text" class="form-control" name="satuan">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Tanggal Peminjaman</label>
              <input type="date" class="form-control" name="tglpinjam">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Tanggal Pengembalian:</label>
              <input type="text" class="form-control" name="tglkembali">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Nama Peminjam:</label>
              <input type="text" class="form-control" name="namapeminjam">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Alamat:</label>
              <input type="text" class="form-control" name="alamat">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Nomor Hp:</label>
              <input type="number" class="form-control" name="nohp">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label >Status:</label>
            <select name="status" class="form-control">
               <option value='Belum dikembalikan'>Belum dikembalikanPenBelum dikembalikan</option>
               <option value='Sudah dikembalikan'>Sudah dikembalikan</option>
            </select>
          </div>
        </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </body>
  </html>
@endsection