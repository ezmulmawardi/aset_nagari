<!DOCTYPE html> 
<html>
<head>
	<title>Laporan Barang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Aset Nagari Bukik Batabuah</h5>
	</center><br> 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Jenis</th>
				<th>Nama</th>
				<th>Asal Usul</th>
				<th>Tahun Perolehan</th>
				<th>Jumlah</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($barang as $A)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$A->kode_jenisbrg}}</td>
				<td>{{$A->nama_barang}}</td>
				<td>{{$A->asal_barang}}</td>
				<td>{{$A->tahun_perolehan}}</td>
				<td>{{ $A->satuan }}</td>
				<td>{{$A->keterangan}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>