<div class="container">
    <div class="page">
        <h1 class="title mb-4" style="text-transform:capitalize;"><?=$this->uri->segment(5)?> Data <?=$judul?></h1>
        <div class="col-md-12">
            <div class="card" style="padding:0px 20px">
                <div class="header mt-3 mb-3">
                    <a href="<?=base_url("dashboard/$menu")?>" class="btn btn-warning btn-fill pull-right">Kembali</a>

                </div>
                <?php
                    if($this->uri->segment(5)=='ubah'){
                        $action = $this->uri->segment(5).'/'.$this->uri->segment(6);
                    } else {
                        $action = $this->uri->segment(5);
                    }
                ?>
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="content">
                                    <?php echo $this->session->flashdata('transaksi_error'); ?>
                                    <?php echo form_open_multipart(base_url("dashboard/surat/form/$surat/$action")) ?>


                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" name="nik" placeholder="NIK"
                                            value="<?=$hasil->nik?>" pattern="[0-9]+" title="Hanya Boleh Angka"
                                            required>
                                        <label for="floatingInput" class="control-label">NIK <span
                                                class="text-danger">*</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" name="name" placeholder="Nama"
                                            value="<?=$hasil->name?>" required>
                                        <label for="floatingInput" class="control-label">Nama <span
                                                class="text-danger">*</label>
                                    </div>


                                    <div class="row g-2">

                                        <div class="col-md">
                                            <div class="form-floating">
                                                <?php $tanggal = date_create($hasil->tgl_lahir); ?>
                                                <input class="form-control" type="date" name="tgl_lahir"
                                                    value="<?=date_format($tanggal, 'Y-m-d')?>" required>
                                                <label for="floatingInputGrid">Tanggal Lahir <span
                                                        class="text-danger">*</span> </label>
                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="tempat_lahir"
                                                    placeholder="Tempat Lahir" value="<?=$hasil->tempat_lahir?>"
                                                    required>
                                                <label for="floatingInput">Tempat Lahir <span
                                                        class="text-danger">*</label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <select class="form-select" name="jk" required>
                                                    <option value="L" <?=($hasil->jk=='l')?'selected':''?>>Laki-laki
                                                    </option>
                                                    <option value="P" <?=($hasil->jk=='p')?'selected':''?>>Perempuan
                                                    </option>
                                                </select>
                                                <label for="floatingSelectGrid">Jenis Kelamin <span
                                                        class="text-danger">*</span></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" name="alamat" placeholder="Alamat"
                                            value="<?=$hasil->alamat?>" required>
                                        <label for="floatingPassword">Alamat <span class="text-danger">*</span>
                                        </label>
                                    </div>

                                    <div class="row g-2 mb-3">
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <select class="form-select" name="rw" required>
                                                    <option value="1" <?=($hasil->rw==1)?'selected':''?>>Pager</option>
                                                    <option value="2" <?=($hasil->rw==2)?'selected':''?>>Ngumbuk
                                                    </option>
                                                    <option value="3" <?=($hasil->rw==3)?'selected':''?>>Bendet</option>
                                                </select>
                                                <label for="floatingSelectGrid">Dusun <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input class="form-control" type="number" min="1" name="rt"
                                                    placeholder="RT" value="<?=$hasil->rt?>" required>
                                                <label for="floatingInputGrid">RT <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" name="ayah" placeholder="Nama Ayah"
                                            value="<?=$hasil->ayah?>" required>
                                        <label for="floatingPassword">Nama Ayah <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" name="ibu" placeholder="Nama Ibu"
                                            value="<?=$hasil->ibu?>" required>
                                        <label for="floatingPassword">Nama Ibu <span class="text-danger">*</span>
                                        </label>
                                    </div>

                                    <div class="col-md-12">
                                        <?php //echo $this->session->flashdata('upload_error'); ?>
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <button class="btn btn-success btn-fill form-control"
                                            name="<?=$surat?>">Selesai</button>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    // $('#tbl_warga').DataTable();
});
</script>