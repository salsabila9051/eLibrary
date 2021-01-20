<?php
include "koneksi.php";
$id_buku = $_GET['id_buku'];
$modal = mysqli_query($koneksi, "Delete FROM tbl_buku WHERE id_buku='$id_buku'");
header('location:home.php?page=buku');
