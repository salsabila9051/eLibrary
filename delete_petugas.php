<?php
include "koneksi.php";
$id_petugas = $_GET['id_petugas'];
$modal = mysqli_query($koneksi, "Delete FROM tbl_petugas WHERE id_petugas='$id_petugas'");
header('location:home.php?page=petugas');
