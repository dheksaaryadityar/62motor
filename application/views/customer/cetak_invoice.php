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