<!DOCTYPE html>
<html>
<head>
	<title>Cetak Peruasahaan</title>
</head>
<style type="text/css">
	body{
		margin: 20px 150px;
	}
	table{
		border=collapse: collapse;
	}
	td{
		padding: 20px;
	}
</style>
<body onload="window.print()">
	<table border="1" width="100%;">
		<tr>
			<td align="center">Profil Perusahaan</td>
		</tr>
	</table>
	<br><br>
	<table>
		<tr>
			<td>Nomor Perusahaan</td>
			<td>:</td>
			<td><?php echo $data->nik ?></td>
		</tr>
		<tr>
			<td>Nama Perusahaan</td>
			<td>:</td>
			<td><?php echo $data->nama ?></td>
		</tr>
		<tr>
			<td>Alamat Perusahaan</td>
			<td>:</td>
			<td><?php echo $data->ktp ?></td>
		</tr>
	</table>
</body>
</html>
