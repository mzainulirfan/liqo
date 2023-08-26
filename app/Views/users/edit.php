<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="row mt-4">
  <div class="col-12 col-xl-8">
    <div class="card card-body border-0 shadow mb-4">
      <h2 class="h5 mb-4">General information</h2>
      <form method="post" action="<?= base_url(); ?>users/update/<?= $userData['user_username']; ?>">
        <?= csrf_field(); ?>
        <div class="row">
          <div class="col-md-12 mb-3">
            <div>
              <label for="fullname">Fullname</label>
              <input class="form-control <?= (session()->has('validation') && ($validation = session('validation'))->hasError('fullname')) ? 'is-invalid' : '' ?>" id="fullname" name="fullname" type="text" value="<?= esc(old('fullname') ? old('fullname') : $userData['user_fullname']); ?>" autofocus>
              <div class="invalid-feedback">
                <?= session()->has('validation') && session('validation')->hasError('fullname') ? session('validation')->getError('fullname') : '' ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="phone">Phone</label>
              <input class="form-control  <?= (session()->has('validation') && ($validation = session('validation'))->hasError('phone_number')) ? 'is-invalid' : '' ?>" id="phone" value="<?= esc(old('phone_number') ? old('phone_number') : $userData['user_phone_number']); ?>" name="phone_number" type="number">
              <div class="invalid-feedback">
                <?= session()->has('validation') && session('validation')->hasError('phone_number') ? session('validation')->getError('phone_number') : '' ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="gender" class="d-block">Gender</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input <?= session()->has('validation') && session('validation')->hasError('gender') ? 'is-invalid' : '' ?>" type="radio" name="gender" id="male" value="male" <?= (old('user_gender') === 'male' || (!old('user_gender') && $userData['user_gender'] === 'male')) ? 'checked' : '' ?>>
              <label class="form-check-label" for="male">Male</label>
              <div class="invalid-feedback">
                <?= session()->has('validation') && session('validation')->hasError('gender') ? session('validation')->getError('gender') : '' ?>
              </div>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input <?= session()->has('validation') && session('validation')->hasError('gender') ? 'is-invalid' : '' ?>" type="radio" name="gender" id="female" value="female" <?= (old('user_gender') === 'female' || (!old('user_gender') && $userData['user_gender'] === 'female')) ? 'checked' : '' ?>>
              <label class="form-check-label" for="female">Female</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 mb-3">
            <div class="form-group">
              <label for="address">Address</label>
              <textarea class="form-control <?= (session()->has('validation') && ($validation = session('validation'))->hasError('address')) ? 'is-invalid' : '' ?>" id="address" name="address" cols="30" rows="10"><?= esc(old('address') ? old('address') : $userData['user_address']); ?></textarea>
              <div class="invalid-feedback">
                <?= session()->has('validation') && session('validation')->hasError('address') ? session('validation')->getError('address') : '' ?>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-primary mt-2">
            Update User
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- <div class="col-12 col-xl-4">
    <div class="row">
      <div class="col-12">
        <div class="card card-body border-0 shadow mb-4">
          <h2 class="h5 mb-4">Select profile photo</h2>
          <div class="d-flex align-items-center">
            <div class="me-3">
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
  </div> -->
</div>
<?= $this->endSection(); ?>