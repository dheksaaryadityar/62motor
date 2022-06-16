<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="width: 80%;">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <th>Merk Motor</th>
                                <td>:</td>
                                <td> <?php echo $tr->merk ?> </td>
                            </tr>
                            <tr>
                                <th>Nama Penerima</th>
                                <td>:</td>
                                <td> <?php echo $tr->nama_penerima ?> </td>
                            </tr>
                            <tr>
                                <th>No HP Penerima</th>
                                <td>:</td>
                                <td> <?php echo $tr->no_penerima ?> </td>
                            </tr>
                            <tr>
                                <th>Tanggal Pengantaran</th>
                                <td>:</td>
                                <td> <?php echo $tr->tgl_pengantaran ?> </td>
                            </tr>
                            <tr class="text-success">
                                <th>Jumlah Pembayaran</th>
                                <td>:</td>
                                <td> <button class="btn btn-sm btn-success"><?php echo $tr->harga ?></button> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td> <a href="<?php echo base_url('customer/transaksi/cetak_invoice/' . $tr->id_dealer) ?>" class="btn btn-sm btn-secondary">Print Invoice</a> </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <a style="width: 100%;" href="<?php echo base_url('customer/transaksi') ?>" class="btn btn-sm btn-secondary mt-3">Kembali</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header alert alert-primary">
                    Informasi Pembayaran
                </div>

                <div class="card-body">
                    <p class="text-success">Silahkan Melakukan Pembayaran Melalui Nomor Rekening dibawah Ini:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bank Mandiri 123456</li>
                        <li class="list-group-item">Bank BCA 123456</li>
                        <li class="list-group-item">Bank Danamon 123456</li>
                        <li class="list-group-item">Bank BRI 123456</li>

                    </ul>
                    <?php if (empty($tr->bukti_pembayaran)) { ?>
                        <!-- Button trigger modal -->
                        <button type="button" style="width: 100%;" class="btn btn-sm btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Upload Bukti Pembayaran
                        </button>
                    <?php } elseif ($tr->status_pembayaran == '0') { ?>
                        <button style="width: 100%; " class="btn btn-sm btn-warning"><i class="fa fa-clock-o">Menunggu Konfirmasi</i></button>
                    <?php } elseif ($tr->status_pembayaran == '1') { ?>
                        <button style="width: 100%; " class="btn btn-sm btn-info"><i class="fa fa-clock-o">Dalam Proses Pengantaran</i></button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal untuk upload bukti pembayaran -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Upload Bukti Pembayaran</label>
                        <input type="hidden" name="id_dealer" class="form-control" value="<?php echo $tr->id_dealer ?>" id="">
                        <input type="file" name="bukti_pembayaran" class="form-control" id="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>