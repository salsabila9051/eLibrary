<?php

$id_buku = $_GET['id_buku'];

$sql = $koneksi->query("SELECT * FROM tbl_buku WHERE id_buku='$id_buku'");

$tampil = $sql->fetch_assoc();

$tahun2 = $tampil['tgl_lahir'];

?>
<div class="section-header">

    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="home.php?page=buku">Data Buku</a></div>
        <div class="breadcrumb-item active">Edit Buku</div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-book fa-2x"> Edit Buku</i>
                    <div class="card-body">
                        <div class="card">
                            <form method="POST">
                                <div class=" card-header">
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>ID Buku</label>
                                        <input class="form-control" name="id_buku" placeholder="CC00" value="<?= $tampil['id_buku']; ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input class="form-control" name="judul" placeholder="Nama" value="<?= $tampil['judul']; ?>" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <input class="form-control" name="pengarang" placeholder="Alamat" value="<?= $tampil['pengarang']; ?>" required="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Buku</label>
                                        <input class="form-control" name="jenis_buku" placeholder="Jenis Buku" value="<?= $tampil['jenis_buku']; ?>" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Buku</label>
                                        <input class="form-control" type="number" name="jml_buku" placeholder="10" value="<?= $tampil['jml_buku']; ?>" required="true">
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
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jenis_buku = $_POST['jenis_buku'];
$simpan = $_POST['simpan'];

if ($simpan) {

    $sql = mysqli_query($koneksi, "UPDATE tbl_buku SET judul='$judul', penerbit='$penerbit', pengarang='$pengarang', thn_terbit='$Tahun', NISBN=$'nisbn', jenis_buku='$jenis_buku' WHERE id_buku='$id_buku'");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data berhasil diubah")
            window.location.href = "?page=buku";
        </script>
<?php
    }
}
?>