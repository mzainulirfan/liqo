<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">Detail User : <span class="text-uppercase"><?= esc($userData['user_fullname']); ?></span></h2>
    </div>
</div>
<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-info" role="alert">
        <?= session('success'); ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
            <form>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div>
                            <label for="first_name">First Name</label>
                            <input class="form-control" id="first_name" type="text" value="<?= esc($userData['user_fullname']); ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" type="number" value="<?= esc($userData['user_phone_number']); ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <input class="form-control" id="phone" type="text" value="<?= esc($userData['user_gender']); ?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="" class="form-control" id="address" cols="30" rows="10" readonly><?= esc($userData['user_address']); ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url(); ?>users/<?= $userData['user_username']; ?>/edit" class=" btn btn-secondary mt-2 text-end">
                        Edit user data
                    </a>
                    <a href="<?= base_url(); ?>users" class="btn btn-outline-secondary mt-2">
                        Back to user list
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="row">
            <div class="col-12">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">Select profile photo</h2>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <!-- Avatar -->
                            <img class="rounded avatar-xl" src="../assets/img/team/profile-picture-3.jpg" alt="change avatar">
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ms-xl-3">
                                <div class="d-flex">
                                    <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <input type="file">
                                    <div class="d-md-block text-left">
                                        <div class="fw-normal text-dark mb-1">
                                            Choose Image
                                        </div>
                                        <div class="text-gray small">
                                            JPG, GIF or PNG. Max size of 800K
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>