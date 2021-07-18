<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM rak WHERE id = '{$id}'");

    header('location: index.php');

?>