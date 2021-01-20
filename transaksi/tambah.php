<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$tgl_pinjam            = date("d-m-Y");
$thari        = mktime(0, 0, 0, date("n"), date("j") + 7, date("Y"));
$kembali        = date("d-m-Y", $thari);

$carikode = mysqli_query($koneksi, "SELECT id_transaksi from tbl_transaksi") or die(mysqli_error());
// menjadikannya array
$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);
// jika $datakode
if ($datakode) {
    // membuat variabel baru untuk mengambil kode barang mulai dari 1
    $nilaikode = substr($jumlah_data[0], 1);
    // menjadikan $nilaikode ( int )
    $kode = (int) $nilaikode;
    // setiap $kode di tambah 1
    $kode = $jumlah_data + 1;
    // hasil untuk menambahkan kode 
    // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
    // atau angka sebelum $kode
    $kode_otomatis = "TRK" . str_pad($kode, 4, "0", STR_PAD_LEFT);
} else {
    $kode_otomatis = "TRK00";
}

?>

<div class="section-header">

    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="home.php?page=buku">Data Transaksi</a></div>
        <div class="breadcrumb-item active">Tambah Transaksi</div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-shopping-bag fa-2x"> Tambah Transaksi</i>
                    <div class="card-body">
                        <div class="card">
                            <form method="POST" onsubmit="return validasi(this)">

                                <div class="form-group">
                                    <label>ID Transaksi</label>
                                    <input class="form-control" id="id_transaksi" value="<?= $kode_otomatis ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label>Buku Yang Dipinjam</label>
                                    <select class="form-control" name="buku">
                                        <?php
                                        $sql = $koneksi->query("SELECT * FROM tbl_buku order by id_buku");
                                        while ($data = $sql->fetch_assoc()) {
                                            echo "<option value='$data[id_buku].$data[judul]'>$data[judul]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <select class="form-control" name="nama">
                                        <?php
                                        $sql = $koneksi->query("SELECT * FROM tbl_anggota order by id_anggota");
                                        while ($data = $sql->fetch_assoc()) {
                                            echo "<option value='$data[id_anggota].$data[nama]'>$data[id_anggota] - $data[nama]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Pinjam</label>
                                    <input class="form-control" type="text" name="tgl_pinjam" id="tgl" readonly value="<?= $tgl_pinjam; ?>" />
                                    <div class="form-group">
                                        <label>Tanggal Kembali</label>
                                        <input class="form-control" type="text" name="tgl_kembali" id="tgl" readonly value="<?= $kembali; ?>" />
                                    </div>

                                    <br>

                                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                    <button type="reset" class="btn btn-warning"> Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if (isset($_POST['simpan'])) {
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $id_transaksi = $_POST['id_transaksi'];

    $buku = $_POST['buku'];
    $pecah_buku = explode(".", $buku);
    $id_buku = $pecah_buku[0];
    $judul = $pecah_buku[1];

    $nama = $_POST['nama'];
    $pecah_nama = explode(".", $nama);
    $id_anggota = $pecah_nama[0];
    $nama = $pecah_nama[1];

    $sql = $koneksi->query("SELECT * FROM tbl_buku where judul = '$judul'");
    while ($data = $sql->fetch_assoc()) {
        $sisa = $data['jml_buku'];

        if ($sisa == 0) {
?>
            <script type="text/javascript">
                alert("Stok Buku Habis, Trasaksi Tidak Dapat Dilakukan, Silahkan Tambah Stok Buku Terlebih Dahulu");
                window.location.href = "?page=transaksi&aksi=tambah";
            </script>
        <?php
        } else {
            $sql = $koneksi->query("INSERT INTO tbl_transaksi(id_transaksi, judul, id_anggota, nama, tgl_pinjam, tgl_kembali,
        status)values('$kode_otomatis', '$judul', '$id_anggota', '$nama', '$tgl_pinjam', '$tgl_kembali','Pinjam')");
            $sql2 = $koneksi->query("UPDATE tbl_buku set jml_buku=(jml_buku-1) WHERE id_buku='$id_buku' ");
        ?>
            <script type="text/javascript">
                alert("Simpan Data Berhasil");
                window.location.href = "?page=transaksi";
            </script>
<?php
        }
    }
}
?>