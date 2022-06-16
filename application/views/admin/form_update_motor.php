<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Motor</h1>
        </div>


        <div class="card">
            <div class="card-body">


                <?php foreach ($motor as $mt) : ?>
                    <form method="POST" action="<?php echo base_url('admin/data_motor/update_motor_aksi') ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type Motor</label>
                                    <input type="hidden" name="id_motor" value="<?php echo $mt->id_motor ?>" id="">
                                    <select name="kode_type" class="form-control">
                                        <option value="<?php echo $mt->kode_type ?>">
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
                                    <input type="text" name="merk" class="form-control" value="<?php echo $mt->merk ?>">
                                    <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="harga" class="form-control" value="<?php echo $mt->harga ?>">
                                    <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Warna</label>
                                    <input type="text" name="warna" class="form-control" value="<?php echo $mt->warna ?>">
                                    <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Tahun</label>
                                    <input type="text" name="tahun" class="form-control" value="<?php echo $mt->tahun ?>">
                                    <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control">
                                        <option <?php if ($mt->status == "1") {
                                                    echo "selected='selected'";
                                                }
                                                echo $mt->status; ?> value="1">Tersedia</option>
                                        <option <?php if ($mt->status == "0") {
                                                    echo "selected='selected'";
                                                }
                                                echo $mt->status; ?> value="0">Tidak Tersedia</option>
                                        <option <?php if ($mt->status == "2") {
                                                    echo "selected='selected'";
                                                }
                                                echo $mt->status; ?> value="0">Pre Order</option>
                                    </select>
                                    <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar</label>
                                    <input type="file" name="gambar" class="form-control" value="<?php echo $mt->gambar ?>">
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