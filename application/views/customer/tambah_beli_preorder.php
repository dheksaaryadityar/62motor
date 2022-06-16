<div class="container">
    <div class="card" style="margin-top: 50px; margin-bottom: 20px ">
        <div class="card-header">
            Form Beli Motor Pre Order
        </div>
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>

                <form method="POST" action="<?php echo base_url('customer/beli/tambah_beli_aksi') ?>">

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Perhatian!</strong> Untuk Motor Pre Order Akan di antar Sesuai dengan Keadaan Di Gudang
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Harga Beli</label>
                        <input type="hidden" name="id_motor" value="<?php echo $dt->id_motor ?>" id="">
                        <input type="text" name="harga" id="" class="form-control" value="<?php echo $dt->harga ?>" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Tanggal Pengantaran</label>
                        <input type="text" name="tgl_pengantaran" id="" class="form-control" value="Tidak Dapat Diisi karena barang Pre Order" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nama Penerima</label>
                        <input type="text" name="nama_penerima" id="" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat_antar" id="" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">No HP Penerima</label>
                        <input type="number" name="no_penerima" id="" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-warning mt-3">Beli Pre Order</button>
                    <a href="<?php echo base_url('customer/dashboard') ?>" class="btn btn btn-secondary mt-3 ml-6">Kembali</a>

                </form>


            <?php endforeach; ?>
        </div>
    </div>
</div>