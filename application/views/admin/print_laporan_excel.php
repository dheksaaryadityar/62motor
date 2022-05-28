<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan transaksi Dealer 62 Motor.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3 style="text-align:center" class="mt-3">Laporan Transaksi Dealer 62 Motor</h3>

<table>
    <tr>
        <td>Dari Tanggal</td>
        <td>:</td>
        <td> <?php echo date('d-M-Y', strtotime($_GET['dari'])); ?> </td>
    </tr>
    <tr>
        <td>Sampai Tanggal</td>
        <td>:</td>
        <td> <?php echo date('d-M-Y', strtotime($_GET['sampai'])); ?> </td>
    </tr>
</table>
<table class="table-responsive table table-bordered table-striped mt-4">
    <tr>
        <th>No</th>
        <th>Nama Customer</th>
        <th>Motor</th>
        <th>Tgl Pengantaran</th>
        <th>Nama Penerima</th>
        <th>Alamat Pengantaran</th>
        <th>No HP Penerima</th>
        <th>Harga</th>
    </tr>

    <?php $no = 1;
    foreach ($laporan as $tr) : ?>

        <tr>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $tr->nama ?> </td>
            <td> <?php echo $tr->merk ?> </td>
            <td> <?php echo date('d/m/Y', strtotime($tr->tgl_pengantaran));  ?> </td>
            <td> <?php echo $tr->nama_penerima ?> </td>
            <td> <?php echo $tr->alamat_antar ?> </td>
            <td> <?php echo $tr->no_penerima ?> </td>
            <td> <?php echo $tr->harga ?> </td>
        </tr>

    <?php endforeach; ?>
</table>