<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Motor</h1>
        </div>
        <a href="<?php echo base_url('admin/data_motor/tambah_motor') ?>" class="btn btn-primary mb-3">Tambah Data</a>
        <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-hover tbale-striped table-border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Type</th>
                    <th>Merk</th>
                    <th>No Plat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($motor as $mt) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><img width="60px" src="<?php echo base_url() . 'assets/upload/' . $mt->gambar ?>"></td>
                        <td><?php echo $mt->kode_type ?></td>
                        <td><?php echo $mt->merk ?></td>
                        <td><?php echo $mt->no_plat ?></td>
                        <td><?php
                            if ($mt->status == "0") {
                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                            } else {
                                echo "<span class='badge badge-primary'>Tersedia</span>";
                            }
                            ?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-success"> <i class="fas fa-eye"></i> </a>
                            <a href="" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </a>
                            <a href="" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i> </a>
                        </td>
                    </tr>


                <?php endforeach; ?>

            </tbody>
        </table>
    </section>
</div>