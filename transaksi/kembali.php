<?php
$id_transaksi = $_GET['id_transaksi'];
$judul = $_GET['judul'];

$sql = $koneksi->query("UPDATE tbl_transaksi SET status='kembali' where id_transaksi='$id_transaksi'");

$sql = $koneksi->query("UPDATE tbl_buku SET jml_buku = (jml_buku+1) where judul='$judul'");
?>
<script type="text/javascript">
    alert("Proses Kembali Buku Berhasil");
    window.location.href = "?page=transaksi";
</script>
<?php
?>