<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>

        <div class="table-responsive">
            <table class="table-responsive table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Customer</th>
                    <th>Motor</th>
                    <th>Tgl Beli</th>
                    <th>Harga</th>
                    <th> Cek Pembayaran</th>
                    <th>Action</th>
                </tr>

                <?php $no = 1;
                foreach ($transaksi as $tr) : ?>

                    <tr>
                        <td> <?php echo $no++ ?> </td>
                        <td> <?php echo $tr->nama ?> </td>
                        <td> <?php echo $tr->merk ?> </td>
                        <td> <?php echo date('d/m/Y', strtotime($tr->tgl_pembelian));  ?> </td>
                        <td> <?php echo $tr->harga ?> </td>
                        <td>
                            <?php if (empty($tr->bukti_pembayaran)) { ?>
                                <button class="btn btn-sm btn-danger"> <i class="fas fa-times-circle"></i> </button>
                            <?php } else { ?>
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/' . $tr->id_dealer) ?>"><i class="fas fa-check-circle"></i></a>
                            <?php } ?>
                        </td>
                        <td> <?php

                                if ($tr->status == "1") {
                                    echo "-";
                                } else { ?>

                                <div class="row">
                                    <a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai') ?>"> <i class="fas fa-check"></i> </a>
                                    <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal') ?>"> <i class="fas fa-times"></i> </a>
                                </div>

                            <?php } ?>
                        </td>

                    </tr>

                <?php endforeach; ?>
            </table>
        </div>

    </section>
</div>