<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="col-12 mb-4">
    <div class="card border-0 shadow">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h2 class="fs-5 fw-bold mb-0">Role Lists</h2><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create role</button>
        </div>

        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <p>Periksa Entrian Form</p>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-centered table-bordered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">No.</th>
                            <th class="border-0">Name</th>
                            <th class="border-0 rounded-end text-end">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($roleData as $role) : ?>
                            <tr>
                                <td class="border-0 fw-bold"><?= $i++; ?></td>
                                <td class="border-0 fw-bold"><?= $role['name']; ?></td>
                                <td class="border-0 fw-bold text-end">
                                    <a href="<?= base_url(); ?>roles/<?= $role['slug']; ?>" class="text-info">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create new role</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>roles/save">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control <?= (session()->has('validation') && ($validation = session('validation'))->hasError('name')) ? 'is-invalid' : '' ?>" name="name" id="name" value="<?= old('name'); ?>">
                        <div class="invalid-feedback">
                            <?= session()->has('validation') && session('validation')->hasError('name') ? session('validation')->getError('name') : '' ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea class="form-control <?= (session()->has('validation') && ($validation = session('validation'))->hasError('description')) ? 'is-invalid' : '' ?>" id="description" name="description"><?= old('description'); ?></textarea>
                        <div class="invalid-feedback">
                            <?= session()->has('validation') && session('validation')->hasError('description') ? session('validation')->getError('description') : '' ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end mt-2">Save Role</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>