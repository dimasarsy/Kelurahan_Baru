<div class="container">
    <div class="page">
        <div class="col-12">
            <h1>Data <?=$judul?></h1>
            <div class="col-md-12">
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
                                        <td><?=$detail->id_domisili?></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>
                                            <?php if($detail->status == 0):?>
                                            <span class="badge badge-info">Tahap Validasi</span>
                                            <?php elseif($detail->status == 1):?>
                                            <span class="badge badge-warning">Tahap Proses</span>
                                            <?php elseif($detail->status == 2):?>
                                            <span class="badge badge-success">Selesai</span>
                                            <?php else:?>
                                            <span class="badge badge-danger">Surat Ditolak</span>
                                            <?php endif;?>
                                        </td>
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
                                        <td> <?=date("d F Y",strtotime($detail->tgl_lahir))?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <th>:</th>
                                        <td><?=($detail->jk=='L'?'Laki-laki':'Perempuan')?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <th>:</th>
                                        <td><?=$detail->alamat?>, RT.<?=sprintf("%03d",$detail->rw)?> /
                                            RW.<?=sprintf("%03d",$detail->rw)?></td>
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
                                </tbody>
                            </table>
                            <?php if ($detail->status==0): ?>

                            <button onclick="proses('<?=base_url("dashboard/surat/proses/$detail->id/$surat/1")?>')"
                                target="_blank" class="btn btn-success btn-fill">Proses</button>

                            <button onclick="catatan('<?=base_url("dashboard/surat/tolak/$detail->id/$surat")?>')"
                                class="btn btn-danger btn-fill">Tolak</button>

                            &ensp;&ensp;&ensp;
                            <?php endif; ?>
                            <?php if ($detail->status==2): ?>
                            <!-- <button onclick="proses('<?=base_url("dashboard/surat/proses/$detail->id/$surat/3")?>')" target="_blank" class="btn btn-success btn-fill">Syarat Valid</button> -->
                            <?php endif; ?>
                            <a href="<?=base_url("dashboard/surat/form/$surat/ubah/$detail->id")?>"
                                class="btn btn-info btn-fill">Ubah</a>
                            <a href="<?=base_url("dashboard/$menu")?>" class="btn btn-warning btn-fill">Kembali</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>