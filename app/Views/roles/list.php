<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="col-12 mb-4">
    <div class="card border-0 shadow">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h2 class="fs-5 fw-bold mb-0">Role Lists</h2><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createrole">Create role</button>
        </div>
        <div class="card-body">
            <?php if (session()->has('error') || session()->has('success')) : ?>
                <div class="alert <?php echo session()->has('error') ? 'alert-danger' : 'alert-info'; ?>" role="alert">
                    <?php if (session()->has('error')) : ?>
                        <p>Periksa Entri Form</p>
                        </hr />
                        <?php echo session('error'); ?>
                    <?php else : ?>
                        <?php echo session('success'); ?>
                    <?php endif; ?>
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
                            <tr style="vertical-align:middle;">
                                <td class="border-0 fw-bold"><?= $i++; ?></td>
                                <td class="border-0 fw-bold"><?= $role['name']; ?></td>
                                <td class="border-0 fw-bold text-end">
                                    <a href=" <?= base_url(); ?>roles/<?= $role['slug']; ?>" class="btn btn-outline-none btn-sm text-info">Detail</a>
                                    <a href="javascript:;" class="btn btn-outline-none btn-sm text-info" data-bs-toggle="modal" data-bs-target="#editrole" type="button" data-id="<?= $role['id'] ?>" data-name="<?= $role['name']; ?>" data-slug="<?= $role['slug']; ?>" data-description="<?= $role['description']; ?>">Rename </a>
                                    <a href="javascript:;" class="btn btn-outline-none btn-sm text-danger" data-bs-toggle="modal" data-bs-target="#removerole" type="button" data-id="<?= $role['id'] ?>" data-name="<?= $role['name']; ?>">Remove </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal create role -->
<div class="modal fade" id="createrole" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createroleLabel" aria-hidden="true">
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

<!-- Modal Edit role -->
<div class="modal fade" id="editrole" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editroleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit role</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>roles/update/">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" id="id" value="<?= $role['id']; ?>">
                    <input type="hidden" name="slug" id="slug" value="<?= $role['slug']; ?>">
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

<!-- Modal confirm delete -->
<div class="modal fade" id="removerole" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure to remove this role?
            </div>
            <div class="modal-footer">
                <form action="<?= base_url(); ?>roles/delete" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $role['id']; ?>">
                    <input type="hidden" name="name" value="<?= $role['name']; ?>">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Remove</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
