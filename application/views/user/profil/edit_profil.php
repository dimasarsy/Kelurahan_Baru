<style media="screen">
.card {
    transition: 0.5s;
}
</style>
<section id="get-started" class="padd-section wow fadeInUp">
    <div class="containers">
        <div class="section-title text-center">
            <h2>Edit Profil</h2><br>

            <?php echo $this->session->flashdata('upload_error'); ?>
        </div>
        <!-- <br> -->
        <div class="row">
            <div class="col-md-12">
                <form id="regForm" method="post" action="<?= base_url('user/edit_profil'); ?>"
                    enctype="multipart/form-data">

                    <div class="tab-content" id="pills-tabContent">
                        <!-- Tab 1 -->

                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="nik" placeholder="NIK"
                                        value="<?=$_SESSION['nik']?>" disabled required>
                                    <label for="floatingInput">NIK <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="email" name="email"
                                        value="<?=$_SESSION['email']?>" placeholder="Email" disabled required>
                                    <label for="floatingInput">Email <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="name" value="<?=$warga->name?>"
                                        placeholder="Nama" required>
                                    <label for="floatingInput">Nama <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="tempat_lahir"
                                        value="<?=$warga->tempat_lahir?>" placeholder="Tempat Lahir" required>
                                    <label for="floatingInput">Tempat Lahir <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="date" name="tgl_lahir"
                                        value="<?=$warga->tgl_lahir?>" placeholder="Tanggal Lahir" required>
                                    <label for="floatingInput">Tanggal Lahir <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">

                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="no_telp" value="<?=$warga->no_telp?>"
                                        placeholder="No. Telp" required>
                                    <label for="floatingInput">No. Telp <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="jk">
                                        <?php foreach ($d_jk as $v => $c){
                                              $s = '';
                                              if ($v==$warga->jk) {
                                                $s = "selected";
                                              }
                                              echo "<option value='$v' $s>$c</option>";
                                            } ?>
                                    </select>
                                    <label for="floatingSelectGrid">Jenis Kelamin <span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="goldar">
                                        <?php foreach ($d_goldar as $v => $c){
                                            $s = '';
                                            if ($v==$warga->goldar) {
                                              $s = "selected";
                                            }
                                            echo "<option value='$v' $s>$c</option>";
                                          } ?>
                                    </select>
                                    <label for="floatingSelectGrid">Golongan Darah <span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="agama">
                                        <?php foreach ($d_agama as $v => $c){
                                              $s = '';
                                              if ($v==$warga->agama) {
                                                $s = "selected";
                                              }
                                              echo "<option value='$v' $s>$c</option>";
                                            } ?>
                                    </select>
                                    <label for="floatingSelectGrid">Agama<span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="pendidikan">
                                        <?php foreach ($d_pendidikan as $v => $c){
                                              $s = '';
                                              if ($v==$warga->pendidikan) {
                                                $s = "selected";
                                              }
                                              echo "<option value='$v' $s>$c</option>";
                                            } ?>
                                    </select>
                                    <label for="floatingSelectGrid">Pendidikan <span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="pekerjaan">
                                        <?php foreach ($d_pekerjaan as $v => $c){
                                              $s = '';
                                              if ($v==$warga->pekerjaan) {
                                                $s = "selected";
                                              }
                                              echo "<option value='$v' $s>$c</option>";
                                            } ?>
                                    </select>
                                    <label for="floatingSelectGrid">Pekerjaan <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="kawin">
                                        <?php foreach (PERKAWINAN as $v => $c){
                                              $s = '';
                                              if ($v==$warga->kawin) {
                                                $s = "selected";
                                              }
                                              echo "<option value='$v' $s>$c</option>";
                                            } ?>
                                    </select>
                                    <label for="floatingSelectGrid">Status Kawin <span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="alamat" value="<?=$warga->alamat?>"
                                        placeholder="Alamat" required>
                                    <label for="floatingInput">Alamat <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="rw">
                                        <?php foreach ($d_rw as $v => $c){
                                              $s = '';
                                              if ($v==$warga->rw) {
                                                $s = "selected";
                                              }
                                              echo "<option value='$v' $s>$c</option>";
                                            } ?>
                                    </select>
                                    <label for="floatingSelectGrid">Dusun<span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="rt" value="0<?=$warga->rt?>"
                                        placeholder="RT" required>
                                    <label for="floatingInput">RT <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">KTP<span class="text-danger">
                                    *(maks 2MB)</span> </label>
                            <input class="form-control" value="<?=$warga->ktp_file?>" type="file"
                                accept=".jpg, .png, .jpeg, .pdf" name="ktp_file" requiredd multiple>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">KK<span class="text-danger">
                                    *(maks 2MB)</span> </label>
                            <input class="form-control" value="<?=$warga->kk_file?>" type="file"
                                accept=".jpg, .png, .jpeg, .pdf" name="kk_file" requiredd multiple>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Foto Profil<span class="text-danger">
                                    *(maks 2MB)</span> </label>
                            <input class="form-control" value="<?=$warga->image?>" type="file"
                                accept=".jpg, .png, .jpeg" name="image" requiredd multiple>
                        </div>

                        <!-- <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div> -->


                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success form-control col-md-12 py-2">Simpan</button>
                        </div>

                    </div>
                </form>
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