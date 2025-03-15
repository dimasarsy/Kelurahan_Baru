<body>
    <!-- partial:index.partial.html -->
    <section class="design-process-section" id="process-tab">
        <div class="container">
            <div class="page">
                <div class="col-12">
                    <h1>Daftar Berita</h1>

                    <a href="<?=base_url("dashboard/berita/form")?>" class="btn btn-success btn-fill pull-right"
                        style="margin-top: -25px"><i class="fa fa-plus" aria-hidden="true"></i>
                        <href> Tambah
                    </a><br>
                    <!-- Tab panes -->

                    <div class="tab-content" style="background-color: white; margin-top: -25px">
                        <div role="tabpanel" class="tab-pane active" id="discover">
                            <div class="container"><br>
                                <div class="header">
                                    <!-- <h4 class="title" style="text-transform:capitalize;"><?=$judul?> Baru</h4> -->
                                    <!-- <p class="category">Last Campaign Performance</p> -->
                                </div>
                                <div class="content">
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-hover table-striped" id="tbl_surat_baru">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Judul</th>
                                                    <th>Desc</th>
                                                    <th>Foto</th>
                                                    <th>Kategori</th>
                                                    <th>Tanggal Berita</th>
                                                    <th>Info</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach ($berita as $v): ?>
                                                <tr>
                                                    <td><?=$v->id?></td>
                                                    <td><?=$v->title?></td>
                                                    <td><?=substr($v->desc,0,130)?>...</td>
                                                    <td>
                                                        <img src="<?=base_url('assets/img/berita/').$v->photo?>"
                                                            width="100" height="100">
                                                    </td>
                                                    <td><?=$v->category?></td>
                                                    <td><?=$v->date?></td>
                                                    <td class="tindakan">
                                                        <a href="<?=base_url("dashboard/berita/detail/$v->id")?>"
                                                            class="btn btn-info btn-fill" title="Lihat">Lihat</a>

                                                        <button style="font-size:13px;"
                                                            onclick="hapus('<?=base_url("dashboard/berita/hapus/$v->id")?>')"
                                                            class="btn btn-danger">Hapus</button>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partial -->



</body>

</html>