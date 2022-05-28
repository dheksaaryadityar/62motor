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
                    <th>Alamat Pengantaran</th>
                    <th>Nama Penerima</th>
                    <th>Tanggal Pengantaran</th>
                    <th>Action</th>
                    <th>Batal</th>
                </tr>

                <?php $no = 1;
                foreach ($transaksi as $tr) : ?>
                    <tr>
                        <td> <?php echo $no++ ?> </td>
                        <td> <?php echo $tr->nama ?> </td>
                        <td> <?php echo $tr->merk ?> </td>
                        <td> <?php echo $tr->harga ?> </td>
                        <td> <?php echo $tr->alamat_antar ?> </td>
                        <td> <?php echo $tr->nama_penerima ?> </td>
                        <td> <?php echo $tr->tgl_pengantaran ?> </td>
                        <td> <?php if ($tr->status_dealer == "Selesai") { ?>
                                <button class="btn btn-sm btn-danger">Pembelian Selesai</button>
                            <?php } else { ?>
                                <a href="<?php echo base_url('customer/transaksi/pembayaran/' . $tr->id_dealer) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                            <?php } ?>
                        </td>
                        <td>

                            <?php if ($tr->status_dealer == 'Belum Selesai') { ?>
                                <a onclick="return confirm('Yakin Transaksi di Batal kan?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/' . $tr->id_dealer) ?>">Batal</a>
                            <?php  } else {  ?>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Batal
                                </button>
                            <?php } ?>



                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Mohon Maaf, Transaksi Ini Sedang Proses / Sudah Selesai dan tidak bisa Di Batalkan!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup Informasi</button>
            </div>
        </div>
    </div>
</div>