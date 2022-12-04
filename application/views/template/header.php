<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Griya | Santika</title>

    <!-- my css -->
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/custom.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap_properti.min.css') ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container-fluid">
            <div class="alert alert-success confirm-div">
                <script>
                    // assumes you're using jQuery
                    $(document).ready(function() {
                        $('.confirm-div').hide();
                        <?php if ($this->session->flashdata('success')) { ?>
                            $('.confirm-div').html('<?php echo $this->session->flashdata('success'); ?>').fadeIn(2000);
                            $('.confirm-div').fadeOut(11000);
                        <?php } ?>
                    });
                </script>
            </div>

            <a class="navbar-brand" href="<?php echo base_url(); ?>">Griya Santika</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation ms-center">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#filosofi">Filosofi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Type">Type</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#terdekat">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contac">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/order') ?>">Beli</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->