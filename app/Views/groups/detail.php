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
                    <h2 class="fs-5 fw-bold mb-0">Group member</h2><a href="../users.html" class="btn btn-sm btn-primary">See all</a>
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
                                            <div class="bg-warning dot rounded-circle me-1"></div><small>In a meeting</small>
                                        </div>
                                    </div>
                                    <div class="col text-end"><a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center"><svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                                            </svg> Message</a></div>
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
                    <div class="row mb-4">
                        <div class="col-auto"><svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                            </svg></div>
                        <div class="col">
                            <div class="progress-wrapper">
                                <div class="progress-info">
                                    <div class="h6 mb-0">Rocket - SaaS Template</div>
                                    <div class="small fw-bold text-gray-500"><span>75 %</span></div>
                                </div>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-auto"><svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                            </svg></div>
                        <div class="col">
                            <div class="progress-wrapper">
                                <div class="progress-info">
                                    <div class="h6 mb-0">Themesberg - Design System</div>
                                    <div class="small fw-bold text-gray-500"><span>60 %</span></div>

                                </div>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-auto"><svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                            </svg></div>
                        <div class="col">
                            <div class="progress-wrapper">
                                <div class="progress-info">
                                    <div class="h6 mb-0">Homepage Design in Figma</div>
                                    <div class="small fw-bold text-gray-500"><span>45 %</span></div>
                                </div>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-auto"><svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                            </svg></div>
                        <div class="col">
                            <div class="progress-wrapper">
                                <div class="progress-info">
                                    <div class="h6 mb-0">Backend for Themesberg v2</div>
                                    <div class="small fw-bold text-gray-500"><span>34 %</span></div>
                                </div>
                                <div class="progress mb-0">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
</div>
<?= $this->endSection(); ?>