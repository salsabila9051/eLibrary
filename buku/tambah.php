<?php
$carikode = mysqli_query($koneksi, "SELECT id_buku from tbl_buku") or die(mysqli_error());
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
    $kode_otomatis = "CC" . str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {
    $kode_otomatis = "CC00";
}
?>
<div class="section-header">

    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="home.php?page=buku">Data Buku</a></div>
        <div class="breadcrumb-item">Tambah Buku</div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-book fa-2x"> Tambah Buku</i>
                    <div class="card-body">
                        <div class="card">
                            <form method="POST">
                                <div class=" card-header">
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>ID Buku</label>
                                        <input class="form-control" id="id_buku" value="<?= $kode_otomatis ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input class="form-control" name="judul" placeholder="Judul Buku" autofocus required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <input class="form-control" name="penerbit" placeholder="Penerbit" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Pengarang</label>
                                        <input class="form-control" name="pengarang" placeholder="Pengarang" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Terbit</label>
                                        <input class="form-control" name="thn_terbit" placeholder="Tahun" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>ISBN</label>
                                        <input class="form-control" name="NISBN" placeholder="nisbn" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Buku</label>
                                        <input type="text" class="form-control" name="jenis_buku" placeholder="Jenis Buku" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah Buku</label>
                                        <input type="number" class="form-control" name="jml_buku" placeholder="10" required="true">
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" />
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
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jenis_buku = $_POST['jenis_buku'];
$jml_buku = $_POST['jml_buku'];
$simpan = $_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("INSERT INTO tbl_buku (id_buku, judul, pengarang, jenis_buku, jml_buku)
 		values('$kode_otomatis', '$judul', '$pengarang', '$jenis_buku', '$jml_buku')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data berhasil disimpan")
            window.location.href = "?page=buku";
        </script>
<?php
    }
}
?>
<script src="dist/assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>