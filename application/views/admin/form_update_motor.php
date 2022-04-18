<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Motor</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <?php foreach ($motor as $mt) : ?>
                    <form method="POST" action="<?php echo base_url('admin/data_motor/update_motor_aksi') ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Type Motor</label>
                                    <input type="hidden" name="id_motor" value="<?php echo $mt->id_motor ?>">
                                    <select name="kode_type" class="form-control">
                                        <option value=" <?php echo $mt->kode_type ?> ">
                                            <?php echo $mt->kode_type ?>
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
                                    <label>Merk</label>
                                    <input type="text" name="merk" class="form-control" value="<?php echo $mt->merk ?>">
                                    <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="Harga" class="form-control" value="<?php echo $mt->harga ?>">
                                    <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Warna</label>
                                    <input type="text" name="warna" class="form-control" value="<?php echo $mt->warna ?>">
                                    <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="text" name="tahun" class="form-control" value="<?php echo $mt->tahun ?>">
                                    <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary mt-6">Simpan</button>
                                <button type="reset" class="btn btn-danger mt-6">Reset</button>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
</div>

</div>
</section>