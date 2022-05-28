<div class="container">
    <div class="card mx-auto" style="margin-top: 100px; width: 80% ">
        <div class="card-header">
            Update Live Pengantaran Motor
        </div>
        <span class="mt-2 p-2"> <?php echo $this->session->flashdata('pesan') ?> </span>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Merk Motor</th>
                    <th>Tanggal</th>
                    <th>Nama Pengantar</th>
                    <th>No Hp Pengantar</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php $no = 1;
                foreach ($transaksi as $tr) : ?>
                    <tr>
                        <td> <?php echo $no++ ?> </td>
                        <td><?php echo $tr->merk ?></td>
                        <td> <?php echo $tr->tgl_antar_kurir ?> </td>
                        <td> <?php echo $tr->nama_kurir ?> </td>
                        <td> <?php echo $tr->no_kurir ?> </td>
                        <td> <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Klik Disini
                            </button> </td>
                        <td> <a class="btn btn-sm btn-secondary" href="<?php echo base_url('customer/transaksi/pembayaran/' . $tr->id_dealer) ?>">Kembali</a> </td>
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
                <h5 class="modal-title" id="exampleModalLabel">Informasi Motor Kamu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo $tr->tracking ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup Informasi</button>
            </div>
        </div>
    </div>
</div>