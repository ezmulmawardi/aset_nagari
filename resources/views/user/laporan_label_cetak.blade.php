<!DOCTYPE html> 
<html>
<head>
  <title>Cetak Label</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <style type="text/css">
    table tr td,
    table tr th{
      font-size: 8pt;
    }
  </style>
  <left>
    <h5>Label Aset</h5>
  </left> 
  <table class='table table-bordered'>
    <tbody>
      @foreach($label as $A)
      <tr>
        <th>{{$A->nama_barang}} <br>{{ $A->kode_jenisbrg }}.{{ $A->label }} <br>13.06.06.2001.{{ $A->bidang_kg }}.{{ $A->tahun_perolehan }} <br>Nagari Bukik Batabuah</th>
      </tr>
      {{-- <tr>
        <td>{{ $i++ }}</td>
        <td>{{$A->kode_jenisbrg}}</td>
        <td>{{$A->nama_barang}}</td>
        <td>{{$A->asal_barang}}</td>
        <td>{{$A->tahun_perolehan}}</td>
        <td>Nomor {{ $A->perbup_no }} Tahun {{ $A->perbup_thn }}</td>
        <td>{{$A->keterangan}}</td>
      </tr> --}}
      @endforeach
    </tbody>
  </table>
 
</body>
</html>