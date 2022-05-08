<div class="container">
    <div class="card mx-auto" style="margin-top: 100px; width: 80% ">
        <div class="card-header">
            Data Transaksi Anda
        </div>
        <span class="mt-2 p-2"> <?php echo $this->session->flashdata('pesan') ?> </span>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Merk Motor</th>
                    <th>Harga</th>
                    <th>Tanggal Pembelian</th>
                    <th>Action</th>
                </tr>

                <?php $no = 1;
                foreach ($transaksi as $tr) : ?>
                    <tr>
                        <td> <?php echo $no++ ?> </td>
                        <td> <?php echo $tr->nama ?> </td>
                        <td> <?php echo $tr->merk ?> </td>
                        <td> <?php echo $tr->harga ?> </td>
                        <td> <?php echo $tr->tgl_pembelian ?> </td>
                        <td> <?php if ($tr->status_dealer == "Selesai") { ?>
                                <button class="btn btn-sm btn-danger">Pembelian Selesai</button>
                            <?php } else { ?>
                                <a href="<?php echo base_url('customer/transaksi/pembayaran/' . $tr->id_dealer) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                            <?php } ?>
                        </td>
                    </tr>


                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>