<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h4>Transaksi</h4>
<table class="table">
    <tr>
        <td>Barang</td>
        <td><?= $transaksi->nama ?></td>
    </tr>
    <tr>
        <td>Pembeli</td>
        <td><?= $transaksi->username ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?= $transaksi->alamat ?></td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td><?= $transaksi->jumlah ?></td>
    </tr>
    <tr>
        <td>Total Harga</td>
        <td><?= $transaksi->total_harga ?></td>
    </tr>
</table>
<?= $this->endSection() ?>

<!-- <tr>
    <td>Nomor Transaksi</td>
    <td><?= $transaksi->id ?></td>
</tr> -->