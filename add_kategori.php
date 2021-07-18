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
 
	<form action="add_kategori.php" method="post" name="form1">
		<table width="25%" border="5">
			<tr> 
				<td>Id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
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
		
		include("koneksi.php");
				
		$result = mysqli_query($koneksi, "INSERT INTO kategori(id,nama) 
        VALUES('$id','$nama')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>