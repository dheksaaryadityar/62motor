<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>


        <div class="table-responsive">
            <span class="mt-2 p-2"> <?php echo $this->session->flashdata('pesan') ?> </span>
            <table class="table-responsive table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Customer</th>
                    <th>Motor</th>
                    <th>Tgl Beli</th>
                    <th>Harga</th>
                    <th>Cek Pembayaran</th>
                    <th>Status Admin</th>
                    <th>Status Dealer</th>
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
                        <td> <?php echo $tr->status_admin ?> </td>
                        <td> <?php echo $tr->status_dealer ?> </td>
                        <td> <?php

                                if ($tr->status == "1") {
                                    echo "-";
                                } else { ?>

                                <div class="row">
                                    <a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai/' . $tr->id_dealer) ?>"> <i class="fas fa-check"></i> </a>
                                    <a onclick="return confirm('Yakin Transaksi <?php echo $tr->nama ?> Motor <?php echo $tr->merk ?> di Batal kan?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/batal_transaksi/' . $tr->id_dealer) ?>"> <i class="fas fa-times"></i> </a>
                                </div>

                            <?php } ?>
                        </td>

                    </tr>

                <?php endforeach; ?>
            </table>
        </div>
    </section>
</div>