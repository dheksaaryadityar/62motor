<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
                <div class="col-md-6">
                    <img width="120%" src="<?php echo base_url('assets/upload/' . $dt->gambar) ?>" alt="">
                </div>
                <div class="col-md">
                    <table class="table">
                        <tr>
                            <th>Merk</th>
                            <td> <?php echo $dt->merk ?> </td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td> <?php echo $dt->harga ?> </td>
                        </tr>
                        <tr>
                            <th>Warna</th>
                            <td> <?php echo $dt->warna ?> </td>
                        </tr>
                        <tr>
                            <th>Tahun</th>
                            <td> <?php echo $dt->tahun ?> </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td> <?php if ($dt->status == '1') {
                                        echo "Tersedia";
                                    } elseif ($dt->status == '0') {
                                        echo "Sudah Terjual";
                                    } elseif ($dt->status == '2') {
                                        echo "Pre Order";
                                    }

                                    ?> </td>
                        </tr>
                        <tr>
                            <td><a class="btn btn-sm btn-secondary ml-4" href="<?php echo base_url('customer/dashboard/') ?>">Kembali</a> </td>
                            <td>
                                <?php
                                if ($dt->status == "0") {
                                    echo "<span class='btn btn-danger' disable >Telah di jual</span>";
                                } elseif ($dt->status == "1") {
                                    echo anchor('customer/beli/tambah_beli/' . $dt->id_motor, '<button class="btn btn-success" >Beli</button>');
                                } elseif ($dt->status == "2") {
                                    echo anchor('customer/beli/tambah_beli_preorder/' . $dt->id_motor, '<button class="btn btn-success">Beli Pre Order</button>');
                                }

                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>