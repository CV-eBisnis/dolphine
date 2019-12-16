<center>
    <h2>Laporan Transaksi<br></h2>
</center>
<table border="1" style="width: 100%;">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama User</th>
            <th>Tanggal</th>
            <th>Barang</th>
            <th>Biaya</th>
            <th>Kode Unik</th>
            <th>Total Bayar</th>
            <th>Lunas</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;
        foreach ($transaksi as $trans => $t) {
            $no++; ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $nama[$trans] ?></td>
            <td><?= date('j F Y', strtotime($t->tanggal)) ?></td>
            <td>
                <?php $j = 1; foreach ($produk[$trans] as $pro => $p) { if ($j>1) { echo "<br>"; } echo "- ".$p." (".$jumlah[$trans][$pro]." buah)"; $j++; } ?>
            </td>
            <td>Rp. <?= number_format($t->biaya,0,",",".") ?>,-</td>
            <td><?= $t->kode_unik ?></td>
            <td>Rp. <?= number_format($t->total_bayar,0,",",".") ?>,-</td>
            <td class="text-center">
                <?php if ($t->status_bayar) { ?>
                    LUNAS
                <?php } else { ?>
                    BELUM LUNAS
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>