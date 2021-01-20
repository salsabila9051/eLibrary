<?php
include "koneksi.php";
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tgl_lahir = $_POST['tgl_lahir'];

//update name_table set name_field = 'value ', name_field= 'value'
//where key = 'value'

$query = "UPDATE tbl_anggota set nama='$nama',alamat='$alamat', no_telp ='$no_telp', tgl_lahir ='$tgl_lahir' where id_anggota='$id_anggota' ";
$simpan = mysqli_query($koneksi, $query);
if ($simpan) {
    header("location:home.php?page=anggota");
} else {
    echo "data error" . mysqli_error();
}
