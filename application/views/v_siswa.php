<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Siswa</title>
</head>
<body>
	<h1>Data Siswa</h1>
	<button onclick="window.location='<?=base_url('siswa/tambah')?>'">Tambah Data</button><br><br>
	<table border="1" style="width: 100%;">
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Tempat Lahir</th>
			<th>Alamat</th>
			<th>Agama</th>
		</tr>
		<tr>
			<?php
			$no = 1;
			foreach ($siswa as $row) { ?>
		 	<tr>
		 		<td><?=$no++?></td>
		 		<td><?=$row->nis?></td>
		 		<td><?=$row->nama?></td>
		 		<td><?=$row->kelas?></td>
		 		<td><?=$row->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'?></td>
		 		<td><?=$row->tanggal_lahir?></td>
		 		<td><?=$row->tempat_lahir?></td>
		 		<td><?=$row->alamat?></td>
		 		<td><?=$row->agama?></td>
		 	</tr>
			<?php } ?>
		</tr>
	</table>
</body>
</html>