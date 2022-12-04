<table class="table mt-3">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Pengirim</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Pesan</th>
            <th>Pesan Di Kirim</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($pesan as $a) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $a['firstname'] . ' ' . $a['lastname']; ?></td>
                <td><?= $a['email']; ?></td>
                <td><?= $a['subject']; ?></td>
                <td><?= $a['message']; ?></td>
                <td><?= date('j F Y', strtotime($a['created'])); ?></td>
                <td>
                    <a href="<?= base_url('pesan/hapuscontact') . '/' . $a['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $a['firstname']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>