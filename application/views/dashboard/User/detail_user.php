<section style="background-color: #eee;">
<h1>Data <?= $judul ?></h1>
    <div class="container">
        <?= $this->session->flashdata('message'); ?>
        <?= $this->session->flashdata('upload_error'); ?>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="<?=base_url('./assets/img/profile/').$warga->image?>" alt="avatar" class="img-fluid"
                            style="width: 150px;">

                        <h5 class="my-3"><?=$warga->name?></h5>

                        <div class="d-flex justify-content-center mb-2">
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa fa-id-card text-warning"></i>
                                <?php if($warga->ktp_file == null){ ?>
                                <p class="mb-0 text-danger">Belum Di Upload</p>
                                <?php } else{ ?>
                                <p class="mb-0"><a href="<?=base_url('./assets/img/profile/').$warga->ktp_file?>"
                                        class="text-decoration-none" target="_blank">Kartu Tanda Penduduk (KTP)</a>
                                </p>
                                <?php } ?>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa fa-file-text" style="color: #333333;"></i>
                                <?php if($warga->kk_file == null){ ?>
                                <p class="mb-0 text-danger">Belum Di Upload</p>
                                <?php } else{ ?>
                                <p class="mb-0"><a href="<?=base_url('./assets/img/profile/').$warga->kk_file?>"
                                        class="text-decoration-none" target="_blank">Kartu Keluarga (KK)</a></p>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-1">
                                <p class="mb-0">:</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?=$warga->name?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tempat Lahir</p>
                            </div>
                            <div class="col-sm-1">
                                <p class="mb-0">:</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?=$warga->tempat_lahir?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-1">
                                <p class="mb-0">:</p>
                            </div>
                            <div class="col-sm-7">
                                <?php if($warga->tgl_lahir != null):?>
                                <p class="text-muted mb-0">
                                    <?=date("d M Y",strtotime($warga->tgl_lahir))?></p>
                                <?php else:?>
                                    <p></p>
                                <?php endif;?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-1">
                                <p class="mb-0">:</p>
                            </div>
                            <div class="col-sm-7">
                                <?php if($warga->jk != null):?>
                                <p class="text-muted mb-0">
                                    <?=($warga->jk=='L'?'Laki-laki':'Perempuan')?>
                                </p>
                                <?php else:?>
                                    <p></p>
                                <?php endif;?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-1">
                                <p class="mb-0">:</p>
                            </div>
                            <div class="col-sm-7">
                                <?php if($warga->alamat != null):?>
                                <p class="text-muted mb-0"><?=$warga->alamat?> RT.<?=sprintf("%03d",$warga->rt)?> /
                                    RW.<?=sprintf("%03d",$warga->rw)?> </p>
                                <?php else:?>
                                    <p></p>
                                <?php endif;?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Golongan Darah</p>
                            </div>
                            <div class="col-sm-1">
                                <p class="mb-0">:</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?=ucfirst($warga->goldar)?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Agama</p>
                            </div>
                            <div class="col-sm-1">
                                <p class="mb-0">:</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?=ucfirst($warga->agama)?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Pendidikan</p>
                            </div>
                            <div class="col-sm-1">
                                <p class="mb-0">:</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?=ucfirst($warga->pendidikan)?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Pekerjaan</p>
                            </div>
                            <div class="col-sm-1">
                                <p class="mb-0">:</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?=ucfirst($warga->pekerjaan)?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Status Pernikahan</p>
                            </div>
                            <div class="col-sm-1">
                                <p class="mb-0">:</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0"><?=ucfirst($warga->kawin)?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>