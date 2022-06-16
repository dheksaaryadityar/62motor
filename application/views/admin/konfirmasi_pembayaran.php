<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Konfirmasi Admin Ke Customer</h1>
        </div>

        <center class="card" style="width: 55%;">
            <div class="card-header">
                <a href="<?php echo base_url('admin/transaksi') ?>" class="btn btn-sm btn-light">Kembali Ke Data Transaksi</a>
            </div>

            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran') ?>">
                    <?php foreach ($pembayaran as $pmb) : ?>

                        <a class="btn btn-sm btn-success" href=" <?php echo base_url('admin/transaksi/download_pembayaran/' . $pmb->id_dealer) ?>"><i class="fas fa-dwonload" </i>Download Bukti Pembayaran</a>
                        <div class="form-check form-switch ml-5">
                            <input class="form-check-input" type="hidden" role="switch" value="<?php echo $pmb->id_dealer ?>" name="id_dealer">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="1" name="status_pembayaran">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Konfirmasi Pembayaran</label>
                            <input class="form-check-input2" type="checkbox" role="switch" id="flexSwitchCheckDefault2" value="2" name="status_pembayaran">
                            <label class="form-check-label2" for="flexSwitchCheckDefault2">Proses Pengantaran</label>
                            <input class="form-check-input3" type="checkbox" role="switch" id="flexSwitchCheckDefault3" value="3" name="status_pembayaran">
                            <label class="form-check-label3" for="flexSwitchCheckDefault2">Motor Pre Order</label>
                            <input class="form-check-input4" type="checkbox" role="switch" id="flexSwitchCheckDefault4" value="4" name="status_pembayaran">
                            <label class="form-check-label3" for="flexSwitchCheckDefault2">Motor Sudah Di Antar</label>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>


                    <?php endforeach; ?>
                </form>
            </div>
        </center>
    </section>
</div>