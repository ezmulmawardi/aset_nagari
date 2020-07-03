<!DOCTYPE html>
<html>
<head>
	<title>Laporan Ketersediaan Barang</title>
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
		<h5>Laporan Ketersediaan Aset Nagari Bukik Batabuah</h5>
	</center><br> 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode</th>
				<th>Nama</th>
				<th>Tahun Diperoleh</th>
				<th>Status</th>
				<th>Asal Barang</th>
				<th>Perbup</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($kt as $A)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $A->kode_jenisbrg }}.{{ $A->label }}</td>
				<td>{{ $A->nama_barang }}</td>
				<td>{{ $A->tahun_perolehan }}</td>
				<td>{{ $A->status }}</td>
				<td>{{ $A->asal_barang }}</td>
				<td> Nomor {{ $A->perbup_no }} Tahun {{ $A->perbup_thn }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>