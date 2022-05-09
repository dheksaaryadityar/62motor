<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Konfirmasi Pembayaran</h1>
        </div>

        <center class="card" style="width: 55%;">
            <div class="card-header">
                Konfirmasi Pembayaran
            </div>

            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/transaksi/cek_pembayaran') ?>">
                    <?php foreach ($pembayaran as $pmb) : ?>

                        <a class="btn btn-sm btn-success" href=" <?php echo base_url('admin/transaksi/download_pembayaran/' . $pmb->id_dealer) ?>"><i class="fas fa-dwonload" </i>Download Bukti Pembayaran</a>
                        <div class="form-check form-switch ml-5">
                            <input class="form-check-input" type="hidden" role="switch" value="<?php echo $pmb->id_dealer ?>" name="id_dealer">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" value="1" name="status_pembayaran">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Konfirmasi Pembayaran</label>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>


                    <?php endforeach; ?>
                </form>
            </div>
        </center>
    </section>
</div>