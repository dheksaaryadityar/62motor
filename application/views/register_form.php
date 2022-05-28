    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">


                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Registrasi User</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('register') ?>">
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
                                    <button value="submit" class="btn btn-sm btn-primary" style="width: 100%;">Daftar</button>
                                </form>
                            </div>
                        </div>

                        <div class="mt-5 text-muted text-center">
                            Sudah punya Akun <a href="<?php echo base_url('auth/login') ?>">Login</a>
                        </div>
                        <div class="mt-3 text-muted text-center">
                            Kembali Ke <a href="<?php echo base_url('customer/dashboard') ?>">Home</a>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; 62 Motor
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>