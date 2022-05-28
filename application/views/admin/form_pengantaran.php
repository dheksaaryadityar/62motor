<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Tracking Motor Untuk Customer</h1>
        </div>
    </section>

    <?php foreach ($transaksi as $tr) : ?>
        <form method="POST" action="<?php echo base_url('admin/transaksi/update_tracking_aksi') ?>">

            <input type="hidden" name="id_dealer" value="<?php echo $tr->id_dealer ?>">

            <div class="form-group mt-3">
                <label for="">Tanggal Kurir Antar Motor</label>
                <input type="hidden" name="id_dealer" value="<?php echo $tr->id_dealer ?>">
                <input type="date" name="tgl_antar_kurir" class="form-control" value="<?php echo $tr->tgl_antar_kurir ?>">
                <?php echo form_error('tgl_antar_kurir', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="form-group mt-3">
                <label for="">Nama Kurir Pengantar Motor</label>
                <input type="text" name="nama_kurir" class="form-control" value="<?php echo $tr->nama_kurir ?>">
                <?php echo form_error('nama_kurir', '<span class="text-small text-danger">', '</span>') ?>
            </div>
            <div class="form-group mt-3">
                <label for="">No HP Kurir Pengantar Motor</label>
                <input type="text" name="no_kurir" class="form-control" value="<?php echo $tr->no_kurir ?>">
                <?php echo form_error('no_kurir', '<span class="text-small text-danger">', '</span>') ?>
            </div>

            <div class="from-group mt-3">
                <label for="">Tracking </label>
                <select name="status_dealer" class="form-control" id="">
                    <option value="<?php echo $tr->status_dealer ?>"> Tracking </option>
                    <option value="Sedang di proses di Dealer">Sedang di proses di Dealer</option>
                    <option value="Sedang diantar menuju Lokasi Anda">Sedang diantar menuju Lokasi Anda</option>
                    <option value="Sedang diantar menuju Lokasi Anda">Paket diterima oleh <?php echo $tr->nama_penerima ?> dengan No HP <?php echo $tr->no_penerima ?></option>
                </select>
            </div>

            <button type="submit" class="btn  btn-success mt-3">Save</button>


        </form>
    <?php endforeach; ?>
</div>