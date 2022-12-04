<table class="table mt-3">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Pemesan</th>
            <th>No telp</th>
            <th>Email</th>
            <th>Type</th>
            <th>Status Pembelian</th>
            <th>Jumlah di Pesan</th>
            <th>Janji Survei</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($pesan as $a) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $a['nama_user']; ?></td>
                <td><?= $a['no_telp']; ?></td>
                <td><?= $a['email']; ?></td>
                <td><?= $a['type']; ?></td>
                <td><?= $a['status']; ?></td>
                <td><?= $a['Jumlah_Di_Pesan']; ?></td>
                <td><?= $a['date']; ?></td>
                <td>
                    <a href="<?= base_url('pesan/hapuskategori') . '/' . $a['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $a['nama_user']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>