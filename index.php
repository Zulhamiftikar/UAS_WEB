<html>
<head>
	<title> Menampilkan data table MySQL </title>
	<style>
		body {font-family: tahoma, arial}
		table {border-collapse: collapse;}
		th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color:#303030}
		th {background : #cccccc; font-size: 12px; border-color: #B0B0B0}
	</style>
</head>
<body>
	<center><h1>WATCH FILM</h1></center>
	<h3>Tabel film</h3>
	<a href="add_film.php">TAMBAH DATA BARU</a><br/><br/>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>nama</th>
				<th>ID rak</th>
				<th>ID Kategori</th>
			</tr>
		</thead>

		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM film';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['id_rak'] ?></td>
					<td><?php echo $row['id_kategori'] ?></td>
					<td><td><a href="update_film.php?id=<?= $row['id']; ?>"><button>update</button></a> |
                    <a href="delete_film.php?id=<?= $row['id']; ?>"><button>Delete</button></a></td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	<h3>Tabel kategori</h3>
	<a href="add_kategori.php">TAMBAH DATA BARU</a><br/><br/>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>nama</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM kategori';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><a href="update_kategori.php?id=<?= $row['id']; ?>"><button>update</button></a> |
                    <a href="delete_kategori.php?id=<?= $row['id']; ?>"><button>Delete</button></a></td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
    <h3>Tabel rak</h3>
	<a href="add_rak.php">TAMBAH DATA BARU</a><br/><br/>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>nama</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM rak';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><a href="update_rak.php?id=<?= $row['id']; ?>"><button>update</button></a> |
                    <a href="delete_rak.php?id=<?= $row['id']; ?>"><button>Delete</button></a></td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	
	<br>
	<br>
	<footer>
		<p>&copy; 2021-Universitas Pelita Bangsa </p>
	</footer>
</body>
</html>