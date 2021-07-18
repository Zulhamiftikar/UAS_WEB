  
<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$id_rak=$_POST['id_rak'];
    $id_kategori=$_POST['id_kategori'];
	
	$result = mysqli_query($koneksi, 
	"UPDATE film SET id='$id',nama='$nama',id_rak='$id_rak',id_kategori='$id_kategori' 
	WHERE id=$id");
	
	header("Location: index.php");
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM film WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id = $user_data['id'];
	$nama = $user_data['nama'];
	$id_rak = $user_data['id_rak'];
    $id_kategori = $user_data['id_kategori'];
}
?>
<html>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="update_film.php">
		<table border="0">
			<tr> 
				<td>ID</td>
				<td><input type="text" name="id" value=<?php echo $id;?>></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>ID Rak</td>
				<td><input type="text" name="id_rak" value=<?php echo $id_rak;?>></td>
			</tr>
            <tr> 
				<td>ID Kategori</td>
				<td><input type="text" name="id_kategori" value=<?php echo $id_kategori;?>></td>
			</>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html