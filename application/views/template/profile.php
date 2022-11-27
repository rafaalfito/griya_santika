<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 font-weight-bold text-gray-800"><?php echo $title; ?></h1>
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
                                <small class="text-primary font-weight-bold">First Name</small>
                                <input type="text" class="form-control form-control-user" name="firstname" placeholder="First Name" value="<?php echo $user['firstname']; ?>">
                                <?php echo form_error('firstname', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <small class="text-primary font-weight-bold">Last Name</small>
                                <input type="text" class="form-control form-control-user" name="lastname" placeholder="Last Name" value="<?php echo $user['lastname']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <small class="text-primary font-weight-bold">Username</small>
                                <input type="text" class="form-control form-control-user" name="username" placeholder="Username" value="<?php echo $user['username']; ?>" readonly>
                                <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <small class="text-primary font-weight-bold">Email</small>
                                <input type="email" class="form-control form-control-user" name="email" placeholder="Email" value="<?php echo $user['email']; ?>">
                                <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <small class="text-primary font-weight-bold">Phone</small>
                                <input type="text" class="form-control form-control-user" name="phone" placeholder="Phone" value="<?php echo $user['phone']; ?>">
                                <?php echo form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <small class="text-primary font-weight-bold">User Role</small>
                                <div class="form-group form-control-select disabled">
                                    <select class="form-control" name="privilege" value="<?php echo set_value('privilege'); ?>" disabled>
                                        <option value="1" <?php if ($user['privilege'] == 1) echo 'selected' ?>>Admin</option>
                                        <option value="2" <?php if ($user['privilege'] == 2) echo 'selected' ?>>Approval</option>
                                        <option value="3" <?php if ($user['privilege'] == 3) echo 'selected' ?>>Checker</option>
                                        <option value="4" <?php if ($user['privilege'] == 4) echo 'selected' ?>>Maker</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <small class="text-primary font-weight-bold">Profile Picture</small>
                                <input type="file" class="file" id="file" name="photo" value="<?php echo $user['photo']; ?>" onchange="return fileValidation()">
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
                        <img class="img-responsive" src="<?php echo base_url('assets/images/') . $user['photo']; ?>" />
                    </div>
                    <hr>
                    <small style="font-style: italic;">
                        “Janganlah menyatakan diri kalian suci. Sesungguhnya Allah yang lebih tahu manakah yang baik di antara kalian.” (HR. Muslim no. 2142).
                    </small>
                </div>
            </div>
        </div>
    </div>