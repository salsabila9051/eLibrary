<?php

$id_anggota = $_GET['id_pengadaan'];

$sql = $koneksi->query("SELECT * FROM tbl_pengadaan WHERE id_pengadaan='$id_pengadaan'");

$tampil = $sql->fetch_assoc();

$tahun2 = $tampil['tgl_lahir'];

?>
<div class="section-header">

    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="home.php?page=anggota">Data Pengadaan Pustaka</a></div>
        <div class="breadcrumb-item">Edit Pengadaan Pustaka</div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user-edit fa-2x"> Ubah Pengadaan Pustaka</i>
                    <div class="card-body">
                        <div class="card">
                            <form method="POST">
                                <div class=" card-header">
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>ID Pengadaan</label>
                                        <input class="form-control" name="id_pengadaan" placeholder="DD001" value="<?= $tampil['id_pengadaan']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input class="form-control" name="judul" placeholder="Judul" value="<?= $tampil['judul']; ?>" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <input class="form-control" name="penerbit" placeholder="Penerbit" value="<?= $tampil['penerbit']; ?>" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input class="form-control" type="number" name="judul" placeholder="628" value="<?= $tampil['judul']; ?>" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Anggaran</label>
                                         <input class="form-control" type="number" name="anggaran" placeholder="628" value="<?= $tampil['anggaranl']; ?>" required="true">
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
</div>
</div>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl_lahir = $_POST['tgl_lahir'];
$no_telp = $_POST['no_telp'];
$simpan = $_POST['simpan'];

if ($simpan) {

    $sql = mysqli_query($koneksi, "UPDATE tbl_anggota SET nama='$nama', alamat='$alamat', tgl_lahir='$tgl_lahir', 
 		no_telp='$no_telp' WHERE id_anggota='$id_anggota'");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data berhasil diubah")
            window.location.href = "?page=anggota";
        </script>
<?php
    }
}
?>
<script src="assets/modules/cleave-js/dist/cleave.min.js"></script>
<script src="assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
<script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<!-- Page Specific JS File -->
<script src="assets/js/page/forms-advanced-forms.js"></script>