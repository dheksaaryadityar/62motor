<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Tambah Type Motor</h1>
        </div>
    </div>


    <form method="POST" action="<?php echo base_url('admin/data_type/tambah_type_aksi') ?>">
        <?php echo $this->session->flashdata('pesan') ?>
        <div class="form-group">
            <label for="">Kode Type</label>
            <input type="text" name="kode_type" class="form-control" id="">
            <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
        </div>
        <div class="form-group">
            <label for="">Nama Type</label>
            <input type="text" name="nama_type" class="form-control" id="">
            <?php echo form_error('nama_type', '<div class="text-small text-danger">', '</div>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger ml-2">Reset</button>

    </form>

</div>