<!DOCTYPE html>
<html>
<head>
	<title>Tabel Pelanggan</title>
</head>
<body>
 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
 
	<h3>Data pelanggan</h3>
 
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No.Hp</th>
			<th>Paket</th>
		</tr>
		@foreach($pelanggan as $p)
		<tr>
			<td>{{ $p->pelanggan_nama }}</td>
			<td>{{ $p->pelanggan_alamat }}</td>
			<td>{{ $p->pelanggan_hp }}</td>
			<td>{{ $p->pelanggan_paket }}</td>
		</tr>
		@endforeach
	</table>
 
	<br/>
	Halaman : {{ $pelanggan->currentPage() }} <br/>
	Jumlah Data : {{ $pelanggan->total() }} <br/>
	Data Per Halaman : {{ $pelanggan->perPage() }} <br/>
 
 
	{{ $pelanggan->links() }}
 
 
</body>
</html>

