<?php
$id_transaksi = $_GET['id_transaksi'];
$judul = $_GET['judul'];
$tgl_kembali = $_GET['tgl_kembali'];
$lambat = $_GET['lambat'];

if ($lambat > 7) {
?>
    <script type="text/javascript">
        alert("Pinjam Buku Tidak Dapat Diperpanjang, Karena Lebih dari 7 Hari.. Kembalikan Dahulu Kemudian Pinjam Kembali");
        window.location.href = "?page=transaksi";
    </script>
    }
    <?php
} else {
    $pecah_tgl_kembali = explode("-", $tgl_kembali);
    $next_3_hari = mktime(0, 0, 0, $pecah_tgl_kembali[1], $pecah_tgl_kembali[0] + 7, $pecah_tgl_kembali[2]);
    $hari_next = date("d-m-y", $next_3_hari);
    $sql = $koneksi->query("UPDATE tbl_transaksi set tgl_kembali='$hari_next' where id_transaksi='$id_transaksi'");
    if ($sql) {
    ?>
        <script type="text/javascript">
            alert("Perpanjang Berhasil");
            window.location.href = "?page=transaksi";
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Perpanjang Gagal");
            window.location.href = "?page=transaksi";
        </script>
<?php
    }
}
?>