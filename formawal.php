<!DOCTYPE html>
<html>
<head>
	<title>Menu Utama</title>
</head>
<style type="text/css">
	body {
			margin-left: 35%;
			margin-top: 5%;
			width: 35%;
			border-left: 2px solid black;
			border-right: 2px solid black;
			border-top: 2px solid black;
			border-bottom: 2px solid black;
			background-color:;
	}
</style>
<body>
	<h1 align="center">Menu Utama</h1>
	<hr>
	<table border="0" align="center">
		<form action="proses.php" method="POST" enctype="multipart/form-data">
			<tr>
				<th>Nama</th>
				<td><input style="width: 98%" type="text" name="nama"></td>
			</tr>
			<tr>
				<th>Upload Image</th>
				<td><input type="file" name="filegambar" id="filegambar"></td>
			</tr>
			<tr>
				<th>Hobby</th>
				<td><input type="checkbox" name="hobby[]" value="Berenang"> Berenang<br>
					<input type="checkbox" name="hobby[]" value="Bermain musik"> Bermain musik<br>
					<input type="checkbox" name="hobby[]" value="Mendengarkan Musik"> Mendengarkan Musik<br>
					<input type="checkbox" name="hobby[]" value="Menulis"> Menulis</td>
			</tr>

			<tr>
				<th>Tempat Wisata</th>
				<td><input type="checkbox" name="tempat_wisata[]" value="Raja Ampat"> Raja Ampat <br>
				<input type="checkbox" name="tempat_wisata[]" value="Bali">Bali<br>
				<input type="checkbox" name="tempat_wisata[]" value="PulauDerawan"> Pulau Derawan<br>
				<input type="checkbox" name="tempat_wisata[]" value="Labuan Bajo"> Labuan Bajo <br>
				<input type="checkbox" name="tempat_wisata[]" value="Bangka Belitung"> Bangka Belitung
				</td>
			</tr>
			<tr>
				<th>Genre Film</th>
				<td><input type="checkbox" name="genre_film[]" value="Action"> Action<br>
					<input type="checkbox" name="genre_film[]" value="Horor"> Horor <br>
					<input type="checkbox" name="genre_film[]" value="Anime"> Anime<br>
					<input type="checkbox" name="genre_film[]" value="Animasi"> Animasi<br>
					<input type="checkbox" name="genre_film[]" value="Thrille"> Thrille</td>
			</tr>
			<tr>
				<td align="center"><input style="width: 100%;margin-left: 100%" type="submit" name="submit" value="submit"><br></td>
			</tr>
		</form>
	</table>
</body>
</html>