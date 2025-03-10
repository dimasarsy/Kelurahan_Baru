<style media="screen">
.card {
    transition: 0.5s;
}
</style>
<section id="get-started" class="padd-section wow fadeInUp">
    <div class="containers">
        <div class="section-title text-center">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <?php echo $this->session->flashdata('upload_error'); ?>
        </div>

        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-12">


                <form id="regForm" action="<?= base_url('user/changepassword'); ?>" method="post">
                    <?= $this->session->flashdata('message'); ?>
                    <?= $this->session->flashdata('upload_error'); ?>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="password" name="current_password"
                                    placeholder="Current Password" required>
                                <label for="floatingInput">Current Password <span class="text-danger">*</span></label>
                                <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="password" name="new_password1"
                                    placeholder="New Password" required>
                                <label for="floatingInput">New Password <span class="text-danger">*</span></label>
                                <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="password" name="new_password2"
                                    placeholder="Repeat Password" required>
                                <label for="floatingInput">Repeat Password <span class="text-danger">*</span></label>
                                <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>