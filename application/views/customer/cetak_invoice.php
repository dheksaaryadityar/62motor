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
            <td>Tanggal Pembelian</td>
            <td>:</td>
            <td> <?php echo $tr->tgl_pembelian ?> </td>
        </tr>
        <tr>
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
</table>

<script type="text/javascript">
    window.print();
</script>