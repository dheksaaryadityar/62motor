<div class="container">
    <div class="card mx-auto" style="margin-top: 180px; width:80%">
        <div class="card-header">
            Data Transaksi Anda
        </div>
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

                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $tr->nama ?> </td>
                    <td> <?php echo $tr->merk ?> </td>
                    <td> <?php echo $tr->harga ?> </td>
                    <td> <?php echo $tr->tgl_pembelian ?> </td>
                    <td> <?php ?> </td>

                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>