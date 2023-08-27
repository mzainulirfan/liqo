<?= $this->extend('layout/default'); ?>

<?= $this->section('content'); ?>
<div class="row mt-4">
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                            </svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="h5">Customers</h2>
                            <h3 class="fw-extrabold mb-1"><?= $countAllUser; ?></h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">Customers</h2>
                            <h3 class="fw-extrabold mb-2"><?= $countAllUser; ?></h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                            Feb 1 - Apr 1,
                            <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                            </svg>
                            USA
                        </small>
                        <div class="small d-flex mt-1">
                            <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                </svg><span class="text-success fw-bolder">22%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="fw-extrabold h5">Revenue</h2>
                            <h3 class="mb-1"><?= $countAllUserToday; ?></h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">Revenue</h2>
                            <h3 class="fw-extrabold mb-2"><?= $countAllUserToday; ?></h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                            Feb 1 - Apr 1,
                            <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                            </svg>
                            GER
                        </small>
                        <div class="small d-flex mt-1">
                            <div>Since last month <svg class="icon icon-xs text-danger" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg><span class="text-danger fw-bolder">2%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="fw-extrabold h5"> Bounce Rate</h2>
                            <h3 class="mb-1">50.88%</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0"> Bounce Rate</h2>
                            <h3 class="fw-extrabold mb-2">50.88%</h3>
                        </div>
                        <small class="text-gray-500">
                            Feb 1 - Apr 1
                        </small>
                        <div class="small d-flex mt-1">
                            <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                </svg><span class="text-success fw-bolder">4%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-info" role="alert">
        <?= session('success'); ?>
    </div>
<?php endif; ?>
<div class="col-12 mb-4">
    <div class="card border-0 shadow">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h2 class="fs-5 fw-bold mb-0">User List</h2>
            <div class="w-50">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Search name ..." autofocus>
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                        <a href="<?= base_url(); ?>users/create" class="btn btn-outline-none text-info"><i class="bx bx-plus"></i>&nbsp;New User</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <?php if (empty($userData)) : ?>
                <div class="card-body text-center py-4 py-xl-5">
                    <p>Data Kosong!</p><a href="<?= base_url(); ?>users" class="btn btn-primary d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                        </svg> Create new user</a>
                </div>
            <?php else : ?>
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start" width="2px">#</th>
                                <th class="border-0">Fullname</th>
                                <th class="border-0">Phone Number</th>
                                <th class="border-0">Gender</th>
                                <th class="border-0 rounded-end text-end">Change</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + ($perPage * ($currenPage - 1));
                            foreach ($userData as $user) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>users/<?= $user['user_username']; ?>" class="text-dark text-uppercase">
                                            <?= $user['user_fullname']; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $user['user_phone_number']; ?>
                                    </td>
                                    <td>
                                        <?= $user['user_gender']; ?>
                                    </td>
                                    <td class="text-end">
                                        <a href="<?= base_url(); ?>users/<?= $user['user_username']; ?>" class="text-info"><i class="bx bx-user"></i>&nbsp;Detail</a>
                                        <a href="<?= base_url(); ?>users/<?= $user['user_username']; ?>/edit" class="text-info"><i class="bx bx-pencil"></i>&nbsp;Edit</a>
                                        <form action="<?= base_url(); ?>users/<?= $user['user_id']; ?>" method="post" class="d-inline-flex">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-outline-none btn-sm text-danger" type="submit" onclick="return confirm('Apakah yakin data <?= $user['user_fullname']; ?> mau dihapus?')"><i class="bx bx-trash"></i>&nbsp;Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <?= $pager->links('users', 'usersPager'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>