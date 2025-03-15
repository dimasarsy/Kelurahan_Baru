<div class="container">
    <div class="page">
        <div class="col-12">
            <h1>Data <?=$judul?></h1>

            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->flashdata('upload_error'); ?>

            <div class="col-md-12">
                <div class="card">

                    <div class="content">
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped table-borderless">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th width="200">Kode</th>
                                        <th width="50">:</th>
                                        <td><?=$detail->id?></td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <th>:</th>
                                        <td>
                                            <?php if($detail->category == "pengumuman"):?>
                                            <span class="badge badge-info">Pengumuman</span>
                                            <?php elseif($detail->category == "utama"):?>
                                            <span class="badge badge-warning">Utama</span>
                                            <?php elseif($detail->category == "artikel"):?>
                                            <span class="badge badge-success">Artikel</span>
                                            <?php else:?>
                                            <span class="badge badge-danger">Event/Kegiatan</span>
                                            <?php endif;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Judul Berita</th>
                                        <th>:</th>
                                        <td><?=$detail->title?></td>
                                    </tr>
                                    <tr>
                                        <th>Isi Berita</th>
                                        <th>:</th>
                                        <td><?=$detail->desc?></td>
                                    </tr>

                                    <tr>
                                        <th>Foto</th>
                                        <th>:</th>
                                        <td><a href="<?=base_url('assets/img/berita/') .$detail->photo?>"
                                                target="_blank" class="text-decoration-none"><i class="fas fa-file"></i>
                                                Lihat</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>



                            <a href="<?=base_url("dashboard/berita/update/$detail->id")?>"
                                class="btn btn-info btn-fill">Ubah</a>
                            <a href="<?=base_url("dashboard/berita")?>" class="btn btn-warning btn-fill">Kembali</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>