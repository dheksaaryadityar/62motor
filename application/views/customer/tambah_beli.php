<div class="container">
    <div class="card" style="margin-top: 50px; margin-bottom: 20px ">
        <div class="card-header">
            Form Beli Motor
        </div>
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>

                <form method="POST" action="<?php echo base_url('customer/beli/tambah_beli_aksi') ?>">


                    <div class="form-group">
                        <label for="">Harga Beli</label>
                        <input type="hidden" name="id_motor" value="<?php echo $dt->id_motor ?>" id="">
                        <input type="text" name="harga" id="" class="form-control" value="<?php echo $dt->harga ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Beli</label>
                        <input type="date" name="tgl_pembelian" id="" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-warning mt-3">Beli</button>

                </form>


            <?php endforeach; ?>
        </div>
    </div>
</div>