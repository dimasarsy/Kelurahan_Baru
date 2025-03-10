<div class="container">
    <div class="page">
        <div class="col-12">
            <h1>Data <?=$judul?></h1>
            <div class="card">
                <div class="row d-flex justify-content-center">
                    <div class="bar-center col-12">
                        <ul id="progressbar" class="text-center">
                            <li class="<?=($detail->status>=0?"active upload":"active failed")?> step0"></li>
                            <li class="<?=($detail->status>=1?"active process":"")?> step0"></li>
                            <li class="<?=($detail->status>=2?"active done":"")?> step0"></li>
                        </ul>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="bar-center col-12">
                        <ul id="progresstext" class="text-center">
                            <?php if($detail->status>=0):?>
                            <li style="color:#FFAD32">Validasi</li>
                            <?php else:?>
                            <li style="color:red">Gagal</li>
                            <?php endif;?>

                            <li style="<?=($detail->status>=1?"color:#FFAD32":"")?>">Proses</li>
                            <li style="<?=($detail->status>=2?"color:#FFAD32":"")?>">Selesai</li>
                        </ul>
                    </div>
                </div>

                <?php if($detail->status==-1):?>
                <div class="container">
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Pengajuan Gagal</h4>
                        <p><?=$detail->catatan?></p>
                        <hr>
                        <p class="mb-0">Silahkan Perbaiki Kesalahan Tersebut, dan Ulangi Proses Pengajuan
                            <?=$judul?>
                        </p>
                    </div>
                </div>
                <?php endif;?>


                <div class=" col-md-12">
                    <div class="card">

                        <div class="content">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped table-borderless">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th width="200">Kode Surat</th>
                                            <th width="50">:</th>
                                            <td><?=$detail->id_skck?></td>
                                        </tr>
                                        <tr>
                                            <th>NIK</th>
                                            <th>:</th>
                                            <td><?=$detail->nik?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <th>:</th>
                                            <td><?=$detail->name?></td>
                                        </tr>
                                        <tr>
                                            <th>Tempat Lahir</th>
                                            <th>:</th>
                                            <td><?=$detail->tempat_lahir?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <th>:</th>
                                            <td><?=$detail->tgl_lahir?></td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <th>:</th>
                                            <td><?=$detail->jk?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <th>:</th>
                                            <td><?=$dusun[$detail->rw]?>,
                                                RW<?=$detail->rw?>/RT<?=$detail->rt?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Ayah</th>
                                            <th>:</th>
                                            <td><?=$detail->ayah?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Ibu</th>
                                            <th>:</th>
                                            <td><?=$detail->ibu?></td>
                                        </tr>
                                        <tr>
                                            <th>Tgl Permohonan</th>
                                            <th>:</th>
                                            <td><?=$detail->tgl_buat?></td>
                                        </tr>
                                        <tr>
                                            <th>Surat Pengantar</th>
                                            <th>:</th>
                                            <td><a href="<?=base_url($detail->pengantar_file)?>" target="_blank"
                                                    class="text-decoration-none"><i class="fas fa-file"></i> Lihat</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>KK</th>
                                            <th>:</th>
                                            <td><a href="<?=base_url($detail->kk_file)?>" target="_blank"
                                                    class="text-decoration-none"><i class="fas fa-file"></i>
                                                    Lihat</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>KTP</th>
                                            <th>:</th>
                                            <td><a href="<?=base_url($detail->ktp_file)?>" target="_blank"
                                                    class="text-decoration-none"><i class="fas fa-file"></i>
                                                    Lihat</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Pas Foto</th>
                                            <th>:</th>
                                            <td><a href="<?=base_url($detail->foto_file)?>" target="_blank"
                                                    class="text-decoration-none"><i class="fas fa-file"></i>
                                                    Lihat</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>File Tambahan</th>
                                            <th>:</th>
                                            <td><a href="<?=base_url($detail->tambahan_file)?>" target="_blank"
                                                    class="text-decoration-none"><i class="fas fa-file"></i>
                                                    Lihat</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <a href="<?=base_url("$menu")?>" class="btn btn-warning btn-fill mb-3 ml-3">Kembali</a>

                </div>
            </div>
        </div>
    </div>
</div>
</div>