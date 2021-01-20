<div class="section-header">
    <i class="fa fa-user fa-2x"> Data Petugas</i>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item">Data Petugas</div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="?page=petugas&aksi=tambah" class="btn btn-outline-primary"><i class="fa fa-plus-circle"> Tambah Data</i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-2">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>ID Petugas</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th>Tgl Lahir</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;

                                $sql = $koneksi->query("SELECT * FROM tbl_petugas");

                                while ($data = $sql->fetch_assoc()) {

                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $data['id_petugas']; ?></td>
                                        <td><?= $data['nama']; ?></td>
                                        <td><?= $data['alamat']; ?></td>
                                        <td><?= $data['no_telp']; ?></td>
                                        <td><?= date('d F Y', strtotime($data['tgl_lahir'])); ?></td>
                                        <td>
                                            <a href="?page=petugas&aksi=ubah&id_petugas=<?php echo $data['id_petugas']; ?>" class="btn btn-outline-success"><i class="fa fa-edit"> </i></a> |
                                            <a href="#" onclick="confirm_modal('delete_petugas.php?&id_petugas=<?= $data['id_petugas']; ?>');" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
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
</div>
</div>
</div>

</div>