<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<a href="/pengaduan/tambah"> tambah </a>
	
	<br/>
	<br/>
 
	<table bordered ="1">
		<tr>
			<th>tanggal_pengaduan</th>
			<th>NIK</th>
			<th>isi_laporan</th>
			<th>foto</th>
			<th>status</th>
		</tr>
		@foreach($pengaduan as $p)
		<tr>
			<td>{{ $p->tanggal_pengaduan }}</td>
			<td>{{ $p->NIK }}</td>
			<td>{{ $p->isi_laporan }}</td>
			<td>{{ $p->foto }}</td>
            <td>{{ $p->status }}</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>