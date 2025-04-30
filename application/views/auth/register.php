<section id="get-started" class="padd-section wow fadeInUp">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nik" id="nik"
                                        placeholder="NIK" value="<?= set_value('nik'); ?>">
                                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="email" id="email"
                                        placeholder="Email Address" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1"
                                            name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2"
                                            name="password2" placeholder="Repeat Password">
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name" id="name"
                                        placeholder="Full Name" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input class="form-control form-control-user" type="text" name="tempat_lahir"
                                        placeholder="Tempat Lahir" required>
                                        <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control form-control-user" type="date" name="tgl_lahir"
                                        placeholder="Tanggal Lahir" required>
                                        <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-user" type="text" name="no_telp" id="no_telp"
                                        placeholder="No. Telp" required>
                                    <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="alamat" class="mb-0">Alamat</label>
                                    <input class="form-control" type="text" name="alamat"
                                    placeholder="Masukkan Alamat Lengkap" required>
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="rt" class="mb-0">RT</label>  
                                        <input class="form-control " type="text" name="rt"
                                        placeholder="Belum Diisi" required>
                                        <?= form_error('rt', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="rw" class="mb-0">RW</label>          
                                        <select class="form-control" name="rw" >
                                            <?php foreach ($d_rw as $v => $c){
                                                $s = '';
                                                if ($v==$warga->rw) {
                                                    $s = "selected";
                                                }
                                                echo "<option value='$v' $s>$c</option>";
                                                } ?>
                                        </select>    
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <label for="floatingSelectGrid" class="mb-0">Jenis Kelamin <span
                                            class="text-danger">*</span></label>         
                                        <select class="form-control" name="jk" >
                                            <?php foreach ($d_jk as $v => $c){
                                                $s = '';
                                                if ($v==$warga->jk) {
                                                    $s = "selected";
                                                }
                                                echo "<option value='$v' $s>$c</option>";
                                                } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="floatingSelectGrid" class="mb-0">Golongan Darah <span
                                        class="text-danger">*</span></label>         
                                        <select class="form-control" name="goldar" >
                                            <?php foreach ($d_goldar as $v => $c){
                                                $s = '';
                                                if ($v==$warga->goldar) {
                                                $s = "selected";
                                                }
                                                echo "<option value='$v' $s>$c</option>";
                                            } ?>
                                        </select>    
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="floatingSelectGrid" class="mb-0">Agama <span
                                        class="text-danger">*</span></label>         
                                        <select class="form-control" name="agama" >
                                        <?php foreach ($d_agama as $v => $c){
                                                $s = '';
                                                if ($v==$warga->agama) {
                                                    $s = "selected";
                                                }
                                                echo "<option value='$v' $s>$c</option>";
                                                } ?>
                                        </select>    
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-4">
                                        <label for="floatingSelectGrid" class="mb-0">Pendidikan <span
                                            class="text-danger">*</span></label>         
                                        <select class="form-control" name="pendidikan" >
                                            <?php foreach ($d_pendidikan as $v => $c){
                                                $s = '';
                                                if ($v==$warga->pendidikan) {
                                                    $s = "selected";
                                                }
                                                echo "<option value='$v' $s>$c</option>";
                                                } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="floatingSelectGrid" class="mb-0">Pekerjaan <span
                                        class="text-danger">*</span></label>         
                                        <select class="form-control" name="pekerjaan" >
                                            <?php foreach ($d_pekerjaan as $v => $c){
                                                $s = '';
                                                if ($v==$warga->pekerjaan) {
                                                    $s = "selected";
                                                }
                                                echo "<option value='$v' $s>$c</option>";
                                                } ?>
                                        </select>    
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label for="floatingSelectGrid" class="mb-0">Status Nikah <span
                                        class="text-danger">*</span></label>         
                                        <select class="form-control" name="kawin" >
                                            <?php foreach (PERKAWINAN as $v => $c){
                                                $s = '';
                                                if ($v==$warga->kawin) {
                                                    $s = "selected";
                                                }
                                                echo "<option value='$v' $s>$c</option>";
                                                } ?>
                                        </select>    
                                    </div>
                                    
                                </div>
                            
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth') ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<script type="text/javascript">
(function($) {
    $.fn.replaceClass = function(pFromClass, pToClass) {
        return this.removeClass(pFromClass).addClass(pToClass);
    };
}(jQuery));

function pindah(num) {
    $('#pills-tab li:nth-child(' + num + ') a').replaceClass('disabled', 'enabled');
    $('#pills-tab li:nth-child(' + num + ') a').tab('show');
    $('#pills-tab li a').replaceClass('enabled', 'disabled');
}

CKEDITOR.disableAutoInline = true;
CKEDITOR.inline = editable;
</script>

<script>
document.foo.submit();
</script>