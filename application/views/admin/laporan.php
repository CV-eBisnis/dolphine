<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID User</th>
            <th>Kode Unik</th>
            <th>Total Biaya</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;
        foreach ($transaksi as $t) {
            $no++; ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $t->id_user ?></td>
                <td><?= $t->kode_unik ?></td>
                <td><?= $t->total_biaya ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>