<!DOCTYPE html>
<html>
<head>
	<title>Laporan Penghapusan Barang</title>
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
		<h5>Laporan Penghapusan Aset Nagari Bukik Batabuah</h5>
	</center><br> 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>No Berita Acara</th>
				<th>Tanggal Dihapus</th>
				<th>Penyebab</th>
				<th>SK Bupati</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($hapus as $A)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $A->kode_jenisbrg }}.{{ $A->label }}</td>
				<td>{{ $A->nama_barang }}</td>
				<td>{{ $A->no_beritaacara }}</td>
				<td>{{ $A->tanggal }}</td>
				<td>{{ $A->penyebab }}</td>
				<td>{{ $A->sk_bupati }}</td>
				<td>{{ $A->keterangan_hapus }}</td>
			</tr>
			@endforeach
		</tbody>
	</table> 
</body>
</html>