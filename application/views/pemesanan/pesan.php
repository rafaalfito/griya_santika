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
                <td><Button>Edit</Button></td>
            </tr>
        <?php } ?>
    </tbody>
</table>