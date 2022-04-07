<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Motor</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">

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
                        </div>

                        <div class="form-group">
                            <label for="">Merk</label>
                            <input type="text" name="merk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">No Plat</label>
                            <input type="text" name="no_plat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Warna</label>
                            <input type="text" name="warna" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <input type="text" name="tahun" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control">
                                    <option value="">Pilih Status</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>

</div>
</section>