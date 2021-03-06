<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Laporan Transaksi</h1>
        </div>
    </section>

    <form method="POST" action="<?php echo base_url('admin/laporan') ?>">

        <div class="form-group">
            <label for="">Dari Tanggal</label>
            <input type="date" name="dari" class="form-control">
            <?php echo form_error('dari', '<span class="text-small text-danger >', ' </span>') ?>
        </div>
        <div class="form-group">
            <label for="">SampaiTanggal</label>
            <input type="date" name="sampai" class="form-control">
            <?php echo form_error('sampai', '<span class="text-small text-danger >', ' </span>') ?>
        </div>

        <button type="submit" class="btn bt-sm btn-primary"> <i class="fas fa-eye"></i> Tampilkan Data </button>

        <hr>
        <div class="btn-group">
            <a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url() . 'admin/laporan/print_laporan/?dari='
                                                                        . set_value('dari') . '&sampai=' . set_value('sampai')
                                                                    ?>"> <i class="fas fa-print"></i> Print PDF</a>
            <a class="btn btn-sm btn-success ml-3" target="_blank" href="<?php echo base_url() . 'admin/laporan/print_laporan_excel/?dari='
                                                                                . set_value('dari') . '&sampai=' . set_value('sampai')
                                                                            ?>"> <i class="fas fa-print"></i> Print Excel</a>
        </div>

    </form>

    <div class="table-responsive">
        <span class="mt-2 p-2"> <?php echo $this->session->flashdata('pesan') ?> </span>
        <table class="table-responsive table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Motor</th>
                <th>Status</th>
                <th>Tgl Pengantaran</th>
                <th>Nama Penerima</th>
                <th>Alamat Pengantaran</th>
                <th>No HP Penerima</th>
                <th>Harga</th>
            </tr>

            <?php $no = 1;
            foreach ($laporan as $tr) : ?>

                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $tr->nama ?> </td>
                    <td> <?php echo $tr->merk ?> </td>
                    <td> <?php if ($tr->status_pembayaran == '0') {
                                echo "Belum Lunas";
                            } else {
                                echo "Lunas";
                            } ?>

                    </td>
                    <td> <?php echo date('d/m/Y', strtotime($tr->tgl_pengantaran));  ?> </td>
                    <td> <?php echo $tr->nama_penerima ?> </td>
                    <td> <?php echo $tr->alamat_antar ?> </td>
                    <td> <?php echo $tr->no_penerima ?> </td>
                    <td> <?php echo $tr->harga ?> </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>