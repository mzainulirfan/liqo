<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="col-12 mb-4">
    <div class="card border-0 shadow">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h2 class="fs-5 fw-bold mb-0">Group lists</h2><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create group</button>
        </div>
        <?php if (empty($groupData)) : ?>
            <div class="text-center py-5 text-danger"> Data not found!</div>
        <?php else : ?>
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
                                <th class="border-0">Mentor</th>
                                <th class="border-0 rounded-end text-end">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($groupData as $group) : ?>
                                <tr style="vertical-align:middle;">
                                    <td class="border-0 fw-bold"><?= $i++; ?></td>
                                    <td class="border-0 fw-bold"><?= esc($group['name']); ?></td>
                                    <td class="border-0 fw-bold">
                                        <a href="<?= base_url(); ?>users/<?= esc($group['user_username']); ?>"><?= esc($group['user_fullname']); ?></a>
                                    </td>
                                    <td class="border-0 fw-bold text-end d-flex justify-content-end align-items-center">
                                        <a href="<?= base_url(); ?>groups/<?= esc($group['slug']); ?>" class="btn btn-outline-none btn-sm text-info">Detail</a>
                                        <a href="javascript:;" class="btn btn-outline-none btn-sm text-info" data-bs-toggle="modal" data-bs-target="#editgroup" type="button" data-id="<?= $group['group_id'] ?>" data-name="<?= $group['name']; ?>" data-slug="<?= $group['slug']; ?>">Rename </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Modal create group -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create new group</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>groups/save">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control <?= (session()->has('validation') && ($validation = session('validation'))->hasError('name')) ? 'is-invalid' : '' ?>" name="name" id="name" value="<?= old('name'); ?>">
                        <div class="invalid-feedback">
                            <?= session()->has('validation') && session('validation')->hasError('name') ? session('validation')->getError('name') : '' ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="mentor" class="col-form-label">Mentor:</label>
                        <select name="mentor_id" id="mentor" class="form-control">
                            <?php foreach ($dataMentor as $mentor) : ?>
                                <option value="<?= $mentor['user_id']; ?>"><?= $mentor['user_fullname']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary float-end mt-2">Save group</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit group -->
<div class="modal fade" id="editgroup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editroleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit role</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url(); ?>groups/update/">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" id="id" value="<?= $group['group_id']; ?>">
                    <input type="hidden" name="slug" id="slug" value="<?= $group['slug']; ?>">
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control <?= (session()->has('validation') && ($validation = session('validation'))->hasError('name')) ? 'is-invalid' : '' ?>" name="name" id="name" value="<?= old('name'); ?>">
                        <div class="invalid-feedback">
                            <?= session()->has('validation') && session('validation')->hasError('name') ? session('validation')->getError('name') : '' ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end mt-2">Update group</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>