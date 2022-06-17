<table style="width: 50%;">
    <h2>Invoice Pembayaran Anda</h2>

    <?php foreach ($transaksi as $tr) : ?>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td> <?php echo $tr->nama ?> </td>
        </tr>
        <tr>
            <td>Merk Motor</td>
            <td>:</td>
            <td> <?php echo $tr->merk ?> </td>
        </tr>
        <tr>
            <td>Nama Penerima</td>
            <td>:</td>
            <td> <?php echo $tr->nama_penerima ?> </td>
        </tr>
        <tr>
            <td>No HP Penerima</td>
            <td>:</td>
            <td> <?php echo $tr->no_penerima ?> </td>
        </tr>
        <tr>
            <td>Tanggal Pengantaran</td>
            <td>:</td>
            <td> <?php echo $tr->tgl_pengantaran ?> </td>
        </tr>
        <tr style="font-weight: bold;">
            <td>Status Pembayaran</td>
            <td>:</td>
            <td> <?php if ($tr->status_pembayaran == '0') {
                        echo "Belum Lunas";
                    } else {
                        echo "Lunas";
                    } ?>

            </td>
        </tr>
        <tr style="font-weight: bold; color:red">
            <td>Jumlah Pembayaran</td>
            <td>:</td>
            <td> <?php echo $tr->harga ?> </td>
        </tr>
        <tr style="font-weight: bold;">
            <td>Tracking Motor</td>
            <td>:</td>
            <td> <?php if ($tr->status_pembayaran == '0') { ?>
                    <button style="width: 100%; " class="btn btn-sm btn-warning"><i class="fa fa-clock-o">Menunggu Konfirmasi dari Pihak Dealer</i></button>
                <?php } elseif ($tr->status_pembayaran == '1') { ?>
                    <button style="width: 100%; " class="btn btn-sm btn-success"><i class="fa fa-clock-o">Terima Kasih, Pembayaran anda sudah dikonfirmasi. Silahkan Menunggu Maks 3 x 24 Jam Motor Akan di antar sesuai Alamat</i></button>
                <?php } elseif ($tr->status_pembayaran == '2') { ?>
                    <button style="width: 100%; " class="btn btn-sm btn-info"><i class="fa fa-clock-o">Dalam Perjalanan Kerumah Anda</i></button>
                <?php } elseif ($tr->status_pembayaran == '3') { ?>
                    <button style="width: 100%; " class="btn btn-sm btn-secondary"><i class="fa fa-clock-o">Motor Pre Order Akan Tersedia 1 - 3 Bulan Kedepan</i></button>
                <?php } elseif ($tr->status_pembayaran == '4') { ?>
                    <button style="width: 100%; " class="btn btn-sm btn-dark"><i class="fa fa-clock-o">Motor Sudah sampai Sesuai Alamat dan diterima oleh pihak penerima</i></button>
                <?php } elseif ($tr->status_pembayaran == '5') { ?>
                    <button style="width: 100%; " class="btn btn-sm btn-primary"><i class="fa fa-clock-o">Motor Anda Masih dalam Administrasi <br> Akan di antar Beberapa Hari Kedepan</i></button>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Rekening Pembayaran</td>
            <td>:</td>
            <td>
                <ul>
                    <li>Bank Mandiri 123456</li>
                    <li>Bank BCA 123456</li>
                    <li>Bank Danamon 123456</li>
                    <li>Bank BRI 123456</li>
                </ul>
            </td>
        </tr>

    <?php endforeach; ?>
    <tr style="font-weight: bold;">
        <td>

        </td>
    </tr>
</table>

<p style="font-weight: bold;">© Dealer 62 Motor, Invoice Ini Dianggap SAH oleh Dealer 62 Motor</p>
<br>
<br>
<br>
<p align="right">Hormat Kami</p>
<br>
<br>
<p align="right">62 Motor</p>


<script type="text/javascript">
    window.print();
</script>