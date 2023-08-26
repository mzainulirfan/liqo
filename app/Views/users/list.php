<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">All Users</h2>
        <p class="mb-0">List of all registered users.</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="#" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Create New User
        </a>
    </div>
</div>
<div class="col-12 col-xxl-6 mb-4">
    <div class="card border-0 shadow">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h2 class="fs-5 fw-bold mb-0">Progress track</h2>
            <a href="#" class="btn btn-sm btn-primary">See tasks</a>
        </div>
        <div class="card-body">
            <?php if (empty($userData)) : ?>
                <div class="card-body text-center py-4 py-xl-5">
                    <p>Data Kosong!</p><a href="#" class="btn btn-primary d-inline-flex align-items-center">
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
                            <?php $i = 1;
                            foreach ($userData as $user) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td>
                                        <?= $user['user_fullname']; ?>
                                    </td>
                                    <td>
                                        <?= $user['user_phone_number']; ?>
                                    </td>
                                    <td>
                                        <?= $user['user_gender']; ?>
                                    </td>
                                    <td class="text-end">
                                        <a href="<?= base_url(); ?>users/<?= $user['user_username']; ?>" class="text-info"><i class="bx bx-user"></i>&nbsp;Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>