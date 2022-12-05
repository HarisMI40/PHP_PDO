<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>

	<table border="1" width="30%">
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>Kelas</td>
		</tr>
		<?php foreach($siswa as $data) : ?>
		<tr>
			<td><?= $data->id ?></td>
			<td><?= $data->nama ?></td>
			<td><?= $data->kelas ?></td>
		</tr>
		<?php endforeach ?>
	</table>

</body>
</html>
