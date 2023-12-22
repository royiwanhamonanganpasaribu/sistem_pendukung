<!DOCTYPE html>
<html>
<head>
	<title>Cetak Kelayakan Calon Debitur</title>
</head>
<style type="text/css">
	body{
		margin: 10px 100px;
	}
	table{
		border=collapse: collapse;
	}
	td{
		padding: 10px;
	}
</style>
<body onload="window.print()">
	<table border="1" width="100%;">
		<tr>
			<td align="center">Penilaian Calon Debitur</td>
		</tr>
	</table>
	<br><br>
	<table>
		<tr>
			<td>NIK Calon Debitur</td>
			<td>:</td>
			<td><?php echo $data->nik ?></td>
		</tr>
		<tr>
			<td>Nama Calon Debitur</td>
			<td>:</td>
			<td><?php echo $data->nama ?></td>
		</tr>
		<tr>
			<td>KTP</td>
			<td>:</td>
			<td><?php echo $data->ktp ?></td>
		</tr>

		<tr>
			<td>KK</td>
			<td>:</td>
			<td><?php echo $data->kk ?></td>
		</tr>

		<tr>
			<td>Surat Nikah</td>
			<td>:</td>
			<td><?php echo $data->surat_nikah ?></td>
		</tr>

		<tr>
			<td>Slip Gaji / Rekening Koran</td>
			<td>:</td>
			<td><?php echo $data->slip_gaji ?></td>
		</tr>

		<tr>
			<td>Surat Jaminan</td>
			<td>:</td>
			<td><?php echo $data->surat_jaminan ?></td>
		</tr>

		<tr>
			<td>Rekening Listrik</td>
			<td>:</td>
			<td><?php echo $data->rek_listrik ?></td>
		</tr>
		<tr>
			<td>Total Nilai</td>
			<td>:</td>
			<td><?php echo $data->rek_listrik+$data->surat_jaminan+$data->slip_gaji+$data->surat_nikah+$data->kk+$data->ktp; ?></td>
		</tr>
		<?php  $status=$data->rek_listrik+$data->surat_jaminan+$data->slip_gaji+$data->surat_nikah+$data->kk+$data->ktp; ?>
		<?php
			if($status>='65')
				{
					$status2=("Layak Survey");
				}
				else
				{
					$status2=("Tidak Layak Survey");
				}
			
		?>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td><?php echo $status2; ?></td>
		</tr>

	</table>
</body>
</html>
