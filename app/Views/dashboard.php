<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12 col-xxl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body text-center py-4 py-xl-5">
                <h3 class="display-3 fw-extrabold mb-0">Dashboard page</h3>
                <p>Total Themesberg Sales</p><a href="#" class="btn btn-primary d-inline-flex align-items-center"><svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                    </svg> Generate Report</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>