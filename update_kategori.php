  
<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	
	$result = mysqli_query($koneksi, 
	"UPDATE kategori SET id='$id',nama='$nama'
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

$result = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id = $user_data['id'];
	$nama = $user_data['nama'];
}
?>
<html>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="update_kategori.php">
		<table border="0">
			<tr> 
				<td>ID</td>
				<td><input type="text" name="id" value=<?php echo $id;?>></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html