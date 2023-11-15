<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <div style="font-size: 64px; color:'#dddddd'">Invoice</div>
    <p>
        <i>Toko Online Saya</i><br>
        Yogyakarta, Indonesia <br>
        02998839838
    </p>
    <hr>
    <hr>
    <p>
        Pembeli : <?= $pembeli->username ?><br>
        Alamat : <?= $transaksi->alamat ?><br>
        Transaksi : <?= $transaksi->id ?><br>
        Tanggal : <?= date('Y-m-d', strtotime($transaksi->created_date)) ?>
    </p>
    <table cellpadding="6">
        <tr>
            <th><strong>Barang</strong></th>
            <th><strong>Harga Satuan</strong></th>
            <th><strong>Jumlah</strong></th>
            <th><strong>Ongkir</strong></th>
            <th><strong>Total harga</strong></th>
        </tr>
        <tr>
            <td><?= $barang->nama ?></td>
            <td><?= "Rp. " . number_format($barang->harga, 2, ",", "."); ?></td>
            <td><?= $transaksi->jumlah ?></td>
            <td><?= "Rp. " . number_format($transaksi->ongkir, 2, ",", "."); ?></td>
            <td><?= "Rp. " . number_format($transaksi->total_harga, 2, ",", "."); ?></td>
        </tr>
    </table>
</body>

</html>