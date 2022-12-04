<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- row ux-->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Admin</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?= $this->ModelAdmin->getUserWhere(['role_id' => 1])->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text- uppercase mb-1">PEMBELIAN</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?php
                                $where = ['Jumlah_Di_Pesan != 0'];
                                $totalJumlah_Di_Pesan = $this->ModelPemesanan->total(
                                    'Jumlah_Di_Pesan',
                                    $where
                                );
                                echo $totalJumlah_Di_Pesan;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('pesan/pemesanan'); ?>"><i class="fas fa-home fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Peminat</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?php /*
                                $where = ['jumlah != 0'];
                                $totalid = $this->ModelPemesanan->total(
                                    'jumlah',
                                    $where
                                );
                                echo $totalid; */
                                ?>
                                <?= $jumlah_pemesan ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user'); ?>"><i class="fas fa-user-tag fa-3x text-success"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row ux-->
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- row table-->
    <div class="row">
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-users text-primary mt-2 "> Data
                    User</span>
                <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Role ID</th>
                        <th>Aktif</th>
                        <th>Member Sejak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($anggota as $a) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= $a['role_id']; ?></td>
                            <td><?= $a['is_active']; ?></td>
                            <td><?= date('Y', $a['tanggal_input']); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-home text-warning mt-2"> Data
                    Rumah</span>
                <a href="<?= base_url('buku'); ?>"><i class="fas fa-search 
text-primary mt-2 float-right"> Tampilkan</i></a>
            </div>
            <div class="table-responsive">
                <table class="table mt-3" id="table-datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type Perumahan</th>
                            <th>Nama</th>
                            <th>email</th>
                            <th>No.Telp</th>
                            <th>Jumlah Di Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($buku as $b) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $b['type']; ?></td>
                                <td><?= $b['nama_user']; ?></td>
                                <td><?= $b['email']; ?></td>
                                <td><?= $b['no_telp']; ?></td>
                                <td><?= $b['Jumlah_Di_Pesan']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end of row table-->
</div>