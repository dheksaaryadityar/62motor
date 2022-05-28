<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Transaksi Selesai</h1>
        </div>
    </section>

    <?php foreach ($transaksi as $tr) : ?>
        <form method="POST" action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi') ?>">

            <input type="hidden" name="id_dealer" value="<?php echo $tr->id_dealer ?>">

            <div class="from-group mt-3">
                <label for="">Status Dealer </label>
                <select name="status_dealer" class="form-control" id="">
                    <option value="<?php echo $tr->status_dealer ?>"> <?php echo $tr->status_dealer ?> </option>
                    <option value="Selesai">Selesai</option>
                    <option value="Proses">Proses</option>
                    <option value="Belum Selesai">Belum Selesai</option>
                </select>
            </div>

            <button type="submit" class="btn  btn-success mt-3">Save</button>


        </form>
    <?php endforeach; ?>
</div>