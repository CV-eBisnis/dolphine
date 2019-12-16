<center>
    <h2>Laporan Pengiriman<br></h2>
</center>
<table border="1" style="width: 100%;">
    <thead>
        <tr>
            <th>No.</th>
            <th>Pengiriman</th>
            <th>Tujuan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0; foreach ($pengiriman as $peng => $pe) { $no++; ?>
        <tr>
            <td><?= $no ?></td>
            <td>
                <?php $j = 1; foreach ($produk[$peng] as $pro => $p) { if ($j>1) { echo "<br>"; } echo "- ".$p." (".$jumlah[$peng][$pro]." buah)"; $j++; } ?>
            </td>
            <td>
                <?= "<b>".$user[$peng]->nama."</b><br>".$user[$peng]->alamat."<br><b>HP : </b>".$user[$peng]->no_hp; ?>
            </td>
            <td>
                <?= $pe->status_pengiriman ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>