<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Motor</h1>
        </div>
    </section>

    <?php foreach ($detail as $dt) : ?>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img width="450px" src="<?php echo base_url() . 'assets/upload/' . $dt->gambar ?>" alt="">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Type Motor </td>
                                <td>
                                    <?php if ($dt->kode_type == "001") {
                                        echo "Motor Matic";
                                    } elseif ($dt->kode_type == "002") {
                                        echo "Motor Bebek";
                                    } elseif ($dt->kode_type == "003") {
                                        echo "Motor Sport";
                                    } elseif ($dt->kode_type == "004") {
                                        echo "Motor Skuter";
                                    } else {
                                        echo "<span class='text-danger'>Type Motor Belum Ada</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td> <?php echo $dt->merk ?> </td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td> <?php echo $dt->harga ?> </td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td> <?php echo $dt->warna ?> </td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td> <?php echo $dt->tahun ?> </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td> <?php if ($dt->status == "0") {
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        } else {
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                        ?>
                                </td>
                            </tr>
                        </table>
                        <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_motor') ?>">Kembali</a>
                        <a class="btn btn-sm btn-primary ml-2" href="<?php echo base_url('admin/data_motor/update_motor/' . $dt->id_motor) ?>">Update</a>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; ?>
</div>