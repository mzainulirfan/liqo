<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body text-center py-4 py-xl-5">
                <h3 class="display-3 fw-extrabold mb-0"><?= $groupData['name']; ?></h3>
                <p>Mentored by <?= $groupData['user_fullname']; ?></p>
                <a href="#" class="btn btn-primary d-inline-flex align-items-center"><svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                    </svg> Generate Report
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <?php if (empty($memberGroup)) : ?>
        <div class="col-6 mx-auto mb-4">
            <div class="alert alert-info" role="alert">
                <div class="alert-icon">
                    <span class="fas fa-bell"></span>
                </div>
                <div class="text-center">
                    <h5 class="alert-heading text-danger">No member found!</h5>
                    <a href="<?= base_url(); ?>groups" class="btn btn-secondary btn-sm mt-2">Back to groups</a>
                </div>

            </div>
        </div>
    <?php else : ?>
        <div class="col-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                    <h2 class="fs-5 fw-bold mb-0">Group member</h2><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-sm btn-primary">Invite member</a>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush list my--3">
                        <?php $i = 1;
                        foreach ($memberGroup as $member) : ?>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p><?= $i++; ?></p>
                                    </div>
                                    <div class="col-auto ms--2">
                                        <h4 class="h6 mb-0"><a href="#"><?= $member['user_fullname']; ?></a></h4>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-warning dot rounded-circle me-1"></div>
                                            <small>In a meeting</small>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                            <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                                            </svg> Message
                                        </a>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                    <h2 class="fs-5 fw-bold mb-0">Meeting list</h2><a href="../users.html" class="btn btn-sm btn-primary">See all history</a>
                </div>
                <div class="card-body">
                    <?php foreach ($scheduleData as $schedule) : ?>
                        <div class="row align-items-center d-block d-sm-flex border-bottom pb-4 mb-4">
                            <div class="col-auto mb-3 mb-sm-0">
                                <div class="calendar d-flex"><span class="calendar-month"><?= substr(date('F', strtotime($schedule['date_at'])), 0, 3); ?></span><span class="calendar-day py-2"><?= date('d', strtotime($schedule['date_at'])); ?></span></div>
                            </div>
                            <div class="col"><a href="../calendar.html">
                                    <h3 class="h5 mb-1"><?= $schedule['name']; ?></h3>
                                </a><span><?= $schedule['descriptioan']; ?></span>
                                <div class="small fw-bold">Time : <?= $schedule['start_at'] . ' - ' . $schedule['finish_at']; ?></div>
                                <span class="small fw-bold">Place: <?= $schedule['location']; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif ?>
</div>

<!-- Modal invite user-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Select user to invite</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($userData as $user) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= esc($user['user_fullname']); ?></td>
                                <td class="text-end">
                                    <a href="<?= base_url(); ?>groups/<?= $user['user_id']; ?>/<?= $groupData['slug']; ?>" class="btn btn-primary btn-sm">Invite</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>