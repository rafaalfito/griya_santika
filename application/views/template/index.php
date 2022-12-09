<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Griya | Santika - <?php echo $title; ?></title>

    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap_peroperti.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/costume.min.css') ?>">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Griya Santika</a>
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
                        <a class="nav-link" href="<?= base_url('user/index') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/form beli') ?>">Beli</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->


    <!-- Banner image -->
    <div class="masthead" style="background-image: url('./img/bakground.jpg');">
        <div class="color-overlay d-flex justify-content-center align-items-center">
            <h1>Griya Santika</h1>
        </div>
    </div>
    <!--  Akhir Banner -->



    <!--filosofi-->
    <section id="filosofi" style="background-color: #ADD8E6">
        <div class="containe">
            <div class="row text-center">
                <div class="col">
                    <h2 class="font-weight-light">Home</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <p>Is a place to come back to after a tired day of activities. Is a
                        comfortable resting place. A
                        comfortable place to gather with family</p>
                </div>
            </div>
        </div>
    </section>
    <!--Akhir filosofi-->



    <!-- Tentang Hunian -->
    <div id="Type"> </div>
    <section class="hunian">
        <div class="container">
            <div class="row text-center">
                <div id="wrapper">
                    <div class="tabs">
                        <input hidden type="radio" name="tab-name" id="tab-1" checked>
                        <button type="button" class="btn" style="background-color: #5F9EA0 ;"><label class="tab-control" for="tab-1">Type-212</label></button>

                        <input hidden type="radio" name="tab-name" id="tab-2" checked>
                        <button type="button" class="btn" style="background-color: #5F9EA0 ;"><label class="tab-control" for="tab-2">Type-302</label></button>

                        <input hidden type="radio" name="tab-name" id="tab-3" checked>
                        <button type="button" class="btn" style="background-color: #5F9EA0 ;"><label class="tab-control" for="tab-3">Type-420</label></button>

                        <div class="tab-content">
                            <div id="tab-panel-1" class="tab-panel">
                                <div class="row border g-0 rounded shadow-sm">
                                    <div class="col md-4">
                                        <h3>Tampak depan</h3>
                                        <div class="card">
                                            <img src="img/depan.jpg">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class=card>
                                            <img src="img/perum.jpg">
                                        </div>
                                        <button class="btn" style="background-color: #808080;"><a style="color: #000000;" href="index3.html">Type-212</a></button>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-panel-2" class="tab-panel">
                                <div class="row border g-0 rounded shadow-sm">
                                    <div class="col md-4">
                                        <h3>Tampak depan</h3>
                                        <div class="card">
                                            <img src="img/depan.jpg">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="card">
                                            <img src="img/prum 09.jpg">
                                        </div>
                                        <button class="btn" style="background-color: #808080;"><a style="color: #000000;" href="index4.html">Type-302</a></button>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-panel-3" class="tab-panel">
                                <div class="row border g-0 rounded shadow-sm">
                                    <div class="col md-4">
                                        <h3>Tampak depan</h3>
                                        <div class="card">
                                            <img src="img/depan.jpg">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="card">
                                            <img src="img/peum 05.jpg">
                                        </div>
                                        <button class="btn" style="background-color: #808080;"><a style="color: #000000;" href="index5.html">Type-420</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Akhir hunian-->
    <!--slider-->
    <div id="carouselExampleIndicators" class="carousel slide fixed" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/03.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/interior-01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/interior-03.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/04.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--akhir-->


    <!--lokasi terdekat-->
    <div id="terdekat"></div>
    <br>
    <div class="lokasi">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="font-weight-light"> <br> Surrounding Facility</h2>
                    <p>gives you the convenience to travel anywhere, located in the prime location of Bogor city,
                        surrounded by several supporting facilities</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card1">
                        <img src="img/botani.jpg" class="card-img-top" alt="Botani Square">
                        <div class="card-body">
                            <p class="card-text">10 Minutes to Botani Square <br>
                                <button type="button" class="btn" style="background-color: #556B2F ;"><a style="color: #ffff;" href="https://www.google.com/maps/place/Botani+Square+Bogor/@-6.6012422,106.8048538,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69c5c5287d2ae7:0x9edb391e7c74be19!8m2!3d-6.6012422!4d106.8070425">Maps</a>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card2">
                        <img src="img/Rs_Siloam.jpg" class="card-img-top" alt="Rs_siloam">
                        <div class="card-body">
                            <p class="card-text">10 Minutes to Siloam Hospital <br>
                                <button type="button" class="btn" style="background-color: #556B2F ;">
                                    <a style="color: #ffff;" href="https://www.google.com/maps/place/Siloam+Hospitals+Bogor/@-6.5956638,106.8024994,17z/data=!3m2!4b1!5s0x2e69c5cfdc7fc24f:0xcb26731227c87d15!4m5!3m4!1s0x2e69c5cfedf6086d:0x64de2ab6cd78dce4!8m2!3d-6.5956638!4d106.8046881">Maps</a>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 ">
                    <div class="card3">
                        <img src="img/Ikea.jpg" class="card-img-top" alt="Ikea">
                        <div class="card-body">
                            <p class="card-text">6 Minutes to Ikea Sentul <br>
                                <button type="button" class="btn" style="background-color: #556B2F ;"><a style="color: #ffff;" href="https://www.google.com/maps/place/IKEA+Sentul+City/@-6.5674344,106.853685,16.67z/data=!4m5!3m4!1s0x2e69c73d34264871:0xb16ab9324c760891!8m2!3d-6.5673402!4d106.8552351">Maps</a></button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 ">
                    <div class="card3">
                        <img src="img/Kebun-Raya.jpg" class="card-img-top" alt="Kebun">
                        <div class="card-body">
                            <p class="card-text">10 Minutes to Bogor Botanical Garden
                                <br>
                                <button type="button" class="btn" style="background-color: #556B2F ;"><a style="color: #ffff;" href="https://www.google.com/maps/place/Kebun+Raya+Bogor/@-6.5976289,106.7973811,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69c5c412a67abb:0x75f23c6b45a37ee5!8m2!3d-6.5976289!4d106.7995698">Maps</a></button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 ">
                    <div class="card3">
                        <img src="img/Toll-Borr.jpg" class="card-img-top" alt="Toll">
                        <div class="card-body">
                            <p class="card-text">3 minutes to Bogor Ring Road tollgate
                                <br>
                                <button type="button" class="btn" style="background-color: #556B2F ;"><a style="color: #ffff;" href="https://www.google.com/maps/place/Tol+Sentul+Barat/@-6.5640044,106.7662276,13z/data=!4m9!1m2!2m1!1spintu+tol+sentul+barat!3m5!1s0x2e69c72879644daf:0x67056fa6c4b94857!8m2!3d-6.5640027!4d106.8362655!15sChZwaW50dSB0b2wgc2VudHVsIGJhcmF0WhgiFnBpbnR1IHRvbCBzZW50dWwgYmFyYXSSAQx0b2xsX3N0YXRpb26aASRDaGREU1VoTk1HOW5TMFZKUTBGblNVUXljVFZYVjNkM1JSQUI">Maps</a></button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 ">
                    <div class="card3">
                        <img src="img/Sekolah-al-azhar.jpg" class="card-img-top" alt="al-azhar">
                        <div class="card-body">
                            <p class="card-text">5 Minutes to Al-Azhar School
                                <br>
                                <button type="button" class="btn" style="background-color: #556B2F ;"><a style="color: #ffff;" href="https://www.google.com/maps/place/Sekolah+Dasar+Islam+Terpadu+(SDIT)+Al+-+Azhhar+Bogor/@-6.5780352,106.7657155,12.82z/data=!4m9!1m2!2m1!1sal+azhar+school+bogor!3m5!1s0x2e69c43b1bec7567:0xceced8df89c602ca!8m2!3d-6.5737719!4d106.8041431!15sChVhbCBhemhhciBzY2hvb2wgYm9nb3IiA4gBAZIBEWVsZW1lbnRhcnlfc2Nob29s">Maps</a></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Contact us-->
        <div id="contac"></div>
        <section class="head">
            <div class="countainer py-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="font-weight-light text-center py-3">Contact us</h1>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="row pt-3">
                                    <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                        <h4 class="font-weight-light">Maps</h4>
                                        <i class="bi bi-geo-alt-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                            </svg></i>
                                        <p>Jl. Lap. Tembak 300-40
                                            Ciaruteun Ilir, Kec. Cibungbulang, <br> Kabupaten Bogor, Jawa Barat 16630
                                            <br>
                                            -6.543939, 106.680600
                                        </p>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                        <h4 class="font-weight-light">Phone</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                        <p>085771522432 a/n Jokowi</p>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                        <h4 class="font-weight-light">Instagram</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg>
                                        <p><a style="color: #000000;" href="">Griya Loka</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                <form name="griya">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                            <label> First name</label>
                                            <input name="nama" type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <label>Email</label>
                                    <input name="email" type="Email" placeholder="Email" class="form-control">
                                    <label>Your Message</label>
                                    <textarea name="pesan" class="form-control mb-3" placeholder="message" id="" cols="20" rows="10"></textarea>
                                    <button type="submit" class="btn" style="background-color: #000000;"><a style="color: #ffff;" href="">Kirim</a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <img src="img/etdah.jpg" alt="">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


        <script>
            var nav = document.querySelector('nav');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 100) {
                    nav.classList.add('bg-dark', 'shadow');
                } else {
                    nav.classList.remove('bg-dark', 'shadow');
                }
            })
        </script>

</body>

</html>