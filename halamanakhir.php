<head>
	<style type="text/css">
		body{
			margin-left: 30%;
			margin-top: 5%;
			width: 40%;
			border-left: 2px solid black;
			border-right: 2px solid black;
			border-top: 2px solid black;
			border-bottom: 2px solid black;
			background-color:;
		} 
	</style>
</head>

<?php  
session_start();
$user = $_SESSION['user'];
?>

<h1 align="center">Tampilkan Data</h1>
<hr>
<table border="1px solid black" align="center">
	<tr>
		<th>Nama</th>
		<th>Gambar</th>
		<th>Hobby</th>
		<th>Tempat Wisata</th>
		<th>Genre Film</th>
	</tr>
	<tr valign="top">
		<td><?php echo $user['nama']; ?></td>
		<td>
			<img width="200" src="<?php echo $user['filegambar'];  ?>" alt="">
		</td>
		<td>
			<?php
				foreach ($user['hobby'] as $hobby => $value) {
			 		echo $value . '<br>';
			 	} 	
			?>
		</td>
				<td><?php
				foreach ($user['tempat_wisata'] as $tempat_wisata => $value) {
			 		echo $value . '<br>';
			 	} 	
			?></td>
		<td>
			<?php
				foreach ($user['genre_film'] as $genre_film => $value) {
			 		echo $value . '<br>';
			 	} 	
			?>
		</td>
	</tr>
	<tr><td align="center" colspan="7"><a href="login.php"><input style="float: right;" type="submit" name="logout" value="logout"></a>
	<a href="menuutama.php"><input style="float: right;" type="submit" name="tambah" value="tambah"></a></td></tr>
</table>