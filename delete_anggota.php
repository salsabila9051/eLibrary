<?php
include "koneksi.php";
$id_anggota = $_GET['id_anggota'];
$modal = mysqli_query($koneksi, "Delete FROM tbl_anggota WHERE id_anggota='$id_anggota'");
header('location:home.php?page=anggota');
