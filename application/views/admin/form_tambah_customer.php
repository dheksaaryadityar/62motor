<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Data Customer</h1>
        </div>
    </section>

    <form method="POST" action="<?php echo base_url('admin/data_customer/tambah_customer_aksi') ?>">


        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control">
            <?php echo form_error('nama', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
            <?php echo form_error('username', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control">
            <?php echo form_error('alamat', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <div class="form-group">
            <label for="">Gender</label>
            <select class="form-control" name="gender" id="">
                <option value="">Pilih Gender</option>
                <option value="Laki-laki">Laki - laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <?php echo form_error('alamat', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <div class="form-group">
            <label for="">No Telepon</label>
            <input type="text" name="no_telepon" class="form-control">
            <?php echo form_error('no_telepon', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <div class="form-group">
            <label for="">No KTP</label>
            <input type="text" name="no_ktp" class="form-control">
            <?php echo form_error('no_ktp', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
            <?php echo form_error('password', '<span class="text-small text-danger">', '</span>') ?>
        </div>
        <button value="submit" class="btn btn-sm btn-primary">Submit</button>
        <button value="reset" class="btn btn-sm btn-danger">Reset</button>

    </form>



</div>