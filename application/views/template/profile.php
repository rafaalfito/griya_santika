<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 font-weight-bold text-gray-800"></h1>
    <p class="mb-4">Mohon mengisi data diri Anda dengan benar.</p>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-8 col-lg-7">

            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Showing Your Profile</h6>
                </div>
                <?php echo $this->session->userdata('message'); ?>
                <div class="card-body">
                    <form class="user" method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'profile'; ?>">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <small class="text-primary font-weight-bold">Nama Lengkap</small>
                                <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Lengkap" value="<?php echo $user['nama']; ?>">
                                <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <small class="text-primary font-weight-bold">Email</small>
                                <input type="email" class="form-control form-control-user" name="email" placeholder="Email" value="<?php echo $user['email']; ?>">
                                <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <small class="text-primary font-weight-bold">Password</small>
                                <input type="text" class="form-control form-control-user" name="password" placeholder="Password" value="<?php echo $user['password_tidak_eknkripsi']; ?>">
                                <?php echo form_error('password_tidak_eknkripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <small class="text-primary font-weight-bold">Profile Picture</small>
                                <input type="file" class="file" id="file" name="image" value="<?php echo $user['image']; ?>" onchange="return fileValidation()">
                                <small class="text-warning"><i class="fas fa-exclamation-triangle fa-fw"></i> File maximum 2MB</small> <br>
                                <?php if (isset($error)) {
                                    echo $error;
                                } ?>
                            </div>
                            <div class="col-sm-6 mt-3">
                                <small class="text-primary font-weight-bold"></small>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Save Profile</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <small style="font-style: italic;">
                        “Tiga hal yang membawa pada jurang kebinasaan: (1) tamak lagi kikir, (2) mengikuti hawa nafsu (yang selalu mengajak pada kejelekan), dan ujub (takjub pada diri sendiri).” (HR. Abdur Rozaq 11: 304. Syaikh Al Albani mengatakan bahwa hadits ini hasan. Lihat Shahihul Jaami’ 3039).
                    </small>
                </div>
            </div>
        </div>

        <!-- Donut Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profile Picture</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div id="imagePreview">
                        <img width="200" class="img-responsive" src="<?php echo base_url() . 'images/profile/' . $user['image']; ?>" />
                    </div>
                    <hr>
                    <small style="font-style: italic;">
                        “Janganlah menyatakan diri kalian suci. Sesungguhnya Allah yang lebih tahu manakah yang baik di antara kalian.” (HR. Muslim no. 2142).
                    </small>
                </div>
            </div>
        </div>
    </div>