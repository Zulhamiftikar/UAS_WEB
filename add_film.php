<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_film.php" method="post" name="form1">
		<table width="25%" border="5">
			<tr> 
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>id rak</td>
				<td><input type="text" name="id_rak"></td>
			</tr>
            <tr> 
				<td>id kategori</td>
				<td><input type="text" name="id_kategori"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$id_rak = $_POST['id_rak'];
		$id_kategori = $_POST['id_kategori'];
		
		include("koneksi.php");
				
		$result = mysqli_query($koneksi, "INSERT INTO film (id,nama,id_rak,id_kategori) 
        VALUES('$id','$nama','$id_rak','$id_kategori')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>