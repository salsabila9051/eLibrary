<div class="section-header">
    <i class="fa fa-shopping-cart fa-2x"> Data Transaksi</i>
    <div class="section-header-breadcrumb">

        <div class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item active">Data Transaksi</div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="?page=transaksi&aksi=tambah" class="btn btn-outline-primary"><i class="fa fa-plus-circle"> Tambah Data</i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive table-bordered">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>ID Transaksi</th>
                                    <th>Judul Buku</th>
                                    <th>ID Anggota</th>
                                    <th>Nama Anggota</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;

                                $sql = $koneksi->query("SELECT * FROM tbl_transaksi Where status='Pinjam'");

                                while ($data = $sql->fetch_assoc()) {

                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $data['id_transaksi']; ?></td>
                                        <td><?= $data['judul']; ?></td>
                                        <td><?= $data['id_anggota']; ?></td>
                                        <td><?= $data['nama']; ?></td>
                                        <td><?= date('d F Y', strtotime($data['tgl_pinjam'])); ?></td>
                                        <td style="color: red;"><?= date('d F Y', strtotime($data['tgl_kembali'])); ?></td>
                                        <td><?= $data['status']; ?></td>
                                        <td class=" text-center">
                                            <a href="?page=transaksi&aksi=kembali&id_transaksi=<?= $data['id_transaksi']; ?>&judul=<?= $data['judul']; ?>" class="btn btn-primary btn-sm "><i class="fa fa-refresh"> Kembali</i></a> </br><br>
                                            <a href="?page=transaksi&aksi=perpanjang&id_transaksi=<?= $data['id_transaksi']; ?>&judul=<?= $data['judul'] ?>&lambat=<?= $lambat ?>&tgl_kembali=<?= $data['tgl_kembali'] ?>;" class="btn btn-outline-warning"><i class="fa fa-refresh"> Perpanjang</i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>