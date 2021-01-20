<div class="section-header">
    <i class="fa fa-user fa-2x"> Data Pelanggaran Anggota</i>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
        <div class="breadcrumb-item"> Data Pelanggaran Anggota</div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="?page=sanksi&aksi=tambah" class="btn btn-outline-primary"><i class="fa fa-plus-circle"> Tambah Data</i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-2">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>ID Sanksi</th>
                                    <th>ID Anggota</th>
                                    <th>Jenis Pelanggaran</th>
                                    <th>Sanksi</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;

                                $sql = $koneksi->query("SELECT * FROM tbl_sanksi");

                                while ($data = $sql->fetch_assoc()) {

                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $data['id_sanksi']; ?></td>
                                        <td><?= $data['id_anggota']; ?></td>
                                        <td><?= $data['pelanggaran']; ?></td>
                                        <td><?= $data['sanksi']; ?></td>
                                         <td><?= $data['ket']; ?></td>
                                      </td>
                                        <td>
                                            <a href="?page=sanksi&aksi=ubah&id_sanksi=<?php echo $data['id_sanksi']; ?>" class="btn btn-outline-success"><i class="fa fa-edit"> </i></a> |
                                            <a href="#" onclick="confirm_modal('delete_sanksi.php?&id_sanksi=<?= $data['id_sanksi']; ?>');" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
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