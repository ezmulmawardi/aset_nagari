<!DOCTYPE html>
<html>
<head>
	<title>Laporan Penanggung Jawab</title>
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
		<h5>Laporan Penanggung Jawab Aset Nagari Bukik Batabuah</h5>
	</center><br> 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode</th>
				<th>Nama</th>
				<th>Status</th>
				<th>Kegunaan</th>
				<th>Tahun Penggunaan</th>
				<th>Penanggung Jawab</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pj as $A)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $A->kode_jenisbrg }}.{{ $A->label }}</td>
				<td>{{ $A->nama_barang }}</td>
				<td>{{ $A->status }}</td>
				<td>{{ $A->kegunaan }}</td>
				<td>{{ $A->tahun_penggunaan }}</td>
				<td><b>{{ $A->nama }}</b></td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>