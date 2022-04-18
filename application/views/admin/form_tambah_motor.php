<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Input Tambah Motor</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="row">
                    <form method="POST" action="<?php echo base_url('admin/data_motor/tambah_motor_aksi') ?>" enctype="multipart/form-data">
                        <div class="col-md">

                            <div class="form-group">
                                <label>Type Motor</label>
                                <select name="kode_type" class="form-control">
                                    <option value="">
                                        Pilih Type Motor
                                    </option>
                                    <?php

                                    foreach ($type as $tp) : ?>
                                        <option value=" <?php echo $tp->kode_type ?>">
                                            <?php echo $tp->nama_type ?>

                                        </option>
                                    <?php endforeach ?>
                                </select>
                                <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <div class="form-group">
                                <label for="">Merk</label>
                                <input type="text" name="merk" class="form-control">
                                <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control">
                                <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Warna</label>
                                <input type="text" name="warna" class="form-control">
                                <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <input type="text" name="tahun" class="form-control">
                                <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-6">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-6">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</div>
</section>