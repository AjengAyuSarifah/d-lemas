<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Registrasi</title>
</head>
<body>
	<h1>Form Registrasi</h1>

	<form method="post" action="<?=base_url('siswa/proses_tambah')?>">
		<table style="text-align: left;">
			<tr>
				<td><p>Isi data dibawah ini:</p></td>
			</tr>
			<tr>
				<th>NIS</th>
				<td>
					<input type="number" name="nis" placeholder="Masukan NIS" required>
				</td>
			</tr>
			<tr>
				<th>Nama</th>
				<td>
					<input type="text" name="nama" placeholder="Masukan Nama" required>
				</td>
			</tr>
			<tr>
				<th>Kelas</th>
				<td>
					<input type="text" name="kelas" placeholder="Masukan Kelas" required>
				</td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td>
					<textarea rows="5" cols="30" name="alamat" placeholder="Masukan Alamat" required></textarea>
				</td>
			</tr>
			<tr>
				<th>Tempat Lahir</th>
				<td>
					<input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" required>
				</td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<td>
					<input type="date" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" required>
				</td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td>
					<input type='radio' name='jenis_kelamin' value='L' required>Laki-laki
	     			<input type='radio' name='jenis_kelamin' value='P' required>Perempuan
				</td>
			</tr>
			<tr>
				<th>Agama</th>
				<td>
					<select name="agama" required>
						<option value="">-- Pilih Agama --</option>
						<option value="Islam">Islam</option>
						<option value="Kristen Khatolik">Kristen Khatolik</option>
						<option value="Kristen Protestan">Kristen Protestan</option>
						<option value="Budha">Budha</option>
						<option value="Hindu">Hindu</option>
						<option value="Khonghucu">Khonghucu</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit">Submit</button>
					<button type="reset">Cancel</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>