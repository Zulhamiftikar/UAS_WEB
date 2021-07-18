<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM kategori WHERE id = '{$id}'");

    header('location: index.php');

?>