<div class="section-header">
    <i class="fa fa-user fa-2x"> Data Pengadaan Pustaka</i>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item">Data Pengadaan Pustaka</div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="?page=pengadaan&aksi=tambah" class="btn btn-outline-primary"><i class="fa fa-plus-circle"> Tambah Data</i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-2">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>ID Pengadaan</th>
                                    <th>Judul</th>
                                    <th>Penerbit</th>
                                    <th>Jumlah</th>
                                    <th>Anggaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;

                                $sql = $koneksi->query("SELECT * FROM tbl_pengadaan");

                                while ($data = $sql->fetch_assoc()) {

                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $data['id_pengadaan']; ?></td>
                                        <td><?= $data['judul']; ?></td>
                                        <td><?= $data['penerbit']; ?></td>
                                        <td><?= $data['jumlah']; ?></td>
                                         <td><?= $data['anggaran']; ?></td>
                                      </td>
                                        <td>
                                            <a href="?page=pengadaan&aksi=ubah&id_pengadaan=<?php echo $data['id_pengadaan']; ?>" class="btn btn-outline-success"><i class="fa fa-edit"> </i></a> |
                                            <a href="#" onclick="confirm_modal('delete_pengadaan.php?&id_pengadaan=<?= $data['id_pengadaan']; ?>');" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
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