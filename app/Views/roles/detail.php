<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body text-center py-4 py-xl-5">
                <h3 class="display-3 fw-extrabold mb-0"><?= $roleData['name']; ?></h3>
                <p><?= $roleData['description']; ?></p><a href="#" class="btn btn-primary d-inline-flex align-items-center"><svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                    </svg> Generate Report</a>
            </div>
        </div>
    </div>
</div>

<div class="col-12 mb-4">
    <div class="card border-0 shadow">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h2 class="fs-5 fw-bold mb-0">User Lists</h2><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add member</button>
        </div>

        <div class="card-body">
            <?php if (empty($userRoleData)) : ?>
                data not found!
            <?php else : ?>
                <div class="table-responsive">
                    <table class="table table-centered table-bordered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0">No.</th>
                                <th class="border-0">Name</th>
                                <th class="border-0 text-end">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($userRoleData as $data) : ?>
                                <tr>
                                    <td class="border-0 fw-bold"><?= $i++; ?></td>
                                    <td class="border-0 fw-bold">
                                        <a href="<?= base_url(); ?>users/<?= $data['user_username']; ?>" class="text-info"><?= $data['user_fullname']; ?></a>
                                    </td>
                                    <td class="border-0 fw-bold text-end">
                                        <a href="#" class="text-danger" title="remove"><i class="bx bx-x-circle"></i>&nbsp;Remove</a>
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