<?php
$carikode = mysqli_query($koneksi, "SELECT id_pengadaan from tbl_pengadaan") or die(mysqli_error());
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
    $kode_otomatis = "DD" . str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {
    $kode_otomatis = "DD00";
}
?>
<div class="section-header">

    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="home.php?page=pengadaan">Dashboard</a></div>
        <div class="breadcrumb-item">Tambah Pengadaan Pustaka</div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user-plus fa-2x"> Tambah Pustaka</i>
                    <div class="card-body">
                        <div class="card">
                            <form method="POST">
                                <div class=" card-header">
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>ID Pengadaan</label>
                                        <input class="form-control" id="id_pengadaan value="<?= $kode_otomatis ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input class="form-control" name="judul" placeholder="Judul" autofocus required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <input class="form-control" name="penerbit" placeholder="Penerbit" required="true">
                                    </div>

                                     <div class="form-group">
                                        <label>Jumlah</label>
                                        <input class="form-control" name="jumlah" placeholder="Jumlah" autofocus required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Anggaran</label>
                                        <input class="form-control" name="anggaran" placeholder="Anggaran" required="true">
                                    </div>

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
$id_pengadaan = $_POST['id_pengadaan'];
$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$jumlah = $_POST['jumlah'];
$anggaran = $_POST['anggaran'];
$simpan = $_POST['simpan'];

if ($simpan) {
    $sql = $koneksi->query("INSERT INTO tbl_pengadaan (id_pengadaan,judul,penerbit,jumlah,anggaran)
 		values('$kode_otomatis', '$judul', '$penerbit', '$jumlah', '$anggaran')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data berhasil disimpan")
            window.location.href = "?page=pengadaan";
        </script>
<?php
    }
}
?>
<script src="dist/assets/js/jquery.validate.min.js"></script>
<script src="dist/assets/modules/cleave-js/dist/cleave.min.js"></script>
<script src="dist/assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="dist/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="dist/assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="dist/assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="dist/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="dist/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="dist/assets/modules/select2/dist/js/select2.full.min.js"></script>
<script src="dist/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<!-- Page Specific JS File -->
<script src="dist/assets/js/page/forms-advanced-forms.js"></script>
<script type="text/javascript">
    function setFormValidation(id) {
        $(id).validate({
            errorPlacement: function(error, element) {
                $(element).parent('div').addClass('has-error');
            }
        });
    }

    $(document).ready(function() {
        setFormValidation('#RegisterValidation');
        setFormValidation('#TypeValidation');
        setFormValidation('#LoginValidation');
        setFormValidation('#RangeValidation');
    });
</script>