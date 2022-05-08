<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <h2>ELEKTRONIK KITA</h2>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Pendaftaran Akun</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('register') ?>">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input id="nama" type="nama" class="form-control" name="nama">
                    <?php echo form_error('nama','<div class="text-small text-danger">','</div>'); ?>
                  </div>

                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username">
                    <?php echo form_error('username','<div class="text-small text-danger">','</div>'); ?>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat">
                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>'); ?>
                  </div>

                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                      <select class="form-control" name="jenis_kelamin">
                        <option value="">--- Pilih Jenis Kelamin ---</option>
                        <option>Laki - Laki</option>
                        <option>Perempuan</option>
                      </select>
                    <?php echo form_error('jenis_kelamin','<div class="text-small text-danger">','</div>'); ?>
                  </div>

                  <div class="form-group">
                    <label for="no_telp">No Telepon</label>
                    <input id="no_telp" type="text" class="form-control" name="no_telp">
                    <?php echo form_error('no_telp','<div class="text-small text-danger">','</div>'); ?>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <?php echo form_error('email','<div class="text-small text-danger">','</div>'); ?>
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password">
                    <?php echo form_error('email','<div class="text-small text-danger">','</div>'); ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Daftar
                    </button>
                  </div>

                  <div class="mt-5 text-muted text-center">
                  Sudah mempunyai akun? <a href="<?php echo base_url('auth/login') ?>">Silahkan Masuk Disini</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>