<body>
    <!-- partial:index.partial.html -->
    <section class="design-process-section" id="process-tab">
        <div class="container">
            <div class="page">
                <div class="col-12">
                    <h1>Surat Kelahiran</h1>
                    <!-- design process steps-->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs process-model more-icon-preocess menu" role="tablist">
                        <li role="presentation" class="active">
                            <a data-bubble="<?=$c_baru?>" href="#discover" aria-controls="discover" role="tab"
                                data-toggle="tab">
                                <i class="fa fa-file" aria-hidden="true"></i>
                                <p>Baru</p>
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-bubble="<?=$c_proses?>" href="#strategy" aria-controls="strategy" role="tab"
                                data-toggle="tab">
                                <i class="fa fa-spinner" aria-hidden="true"></i>
                                <p>Proses</p>
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-bubble="<?=$c_selesai?>" href="#optimization" aria-controls="optimization"
                                role="tab" data-toggle="tab">
                                <i class="fa  fa-check-square-o" aria-hidden="true"></i>
                                <p>Selesai</p>
                            </a>
                        </li>
                    </ul>
                    <!-- end design process steps-->
                    <a href="<?=base_url("dashboard/$judul/form/$surat/tambah")?>"
                        class="btn btn-success btn-fill pull-right" style="margin-top: -25px"><i class="fa fa-plus"
                            aria-hidden="true"></i>
                        <href> Tambah
                    </a><br>
                    <!-- Tab panes -->

                    <div class="tab-content" style="background-color: white; margin-top: -25px">
                        <div role="tabpanel" class="tab-pane active" id="discover">
                            <div class="container"><br>
                                <div class="header">
                                    <h4 class="title" style="text-transform:capitalize;"><?=$judul?> Baru</h4>
                                    <!-- <p class="category">Last Campaign Performance</p> -->
                                </div>
                                <div class="content">
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-hover table-striped" id="tbl_surat_baru">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Pemohon</th>
                                                    <th>Nama Anak</th>
                                                    <th>Tgl Lahir</th>
                                                    <th>Nama Ayah</th>
                                                    <th>Nama Ibu</th>
                                                    <th>Tgl Permohonan</th>
                                                    <th>Tindakan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach ($baru as $v): ?>
                                                <tr>
                                                    <td><?=$v->id_kelahiran?></td>
                                                    <td><?=$v->name?></td>
                                                    <td><?=$v->anak?></td>
                                                    <td><?=$v->tempat_lahir?>,
                                                        <?=date("d M 'y",strtotime($v->tgl_lahir))?></td>
                                                    <td><?=$v->ayah?></td>
                                                    <td><?=$v->ibu?></td>
                                                    <td><?=$v->tgl_buat?></td>
                                                    <td class="tindakan">
                                                        <a href="<?=base_url("dashboard/surat/detail/$surat/$v->id")?>"
                                                            class="btn btn-info btn-fill" title="Lihat">Lihat</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>


                        </div>


                        <div role="tabpanel" class="tab-pane" id="strategy">
                            <div class="container"><br>
                                <div class="header">
                                    <h4 class="title" style="text-transform:capitalize;"><?=$judul?> Proses</h4>
                                    <!-- <p class="category">Last Campaign Performance</p> -->
                                </div>
                                <div class="content">
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-hover table-striped" id="tbl_surat_proses">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Pemohon</th>
                                                    <th>Nama Anak</th>
                                                    <th>Tgl Lahir</th>
                                                    <th>Nama Ayah</th>
                                                    <th>Nama Ibu</th>
                                                    <th>Tgl Permohonan</th>
                                                    <th>Tindakan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach ($proses as $v): ?>
                                                <tr>
                                                    <td><?=$v->id_kelahiran?></td>
                                                    <td><?=$v->name?></td>
                                                    <td><?=$v->anak?></td>
                                                    <td><?=$v->tempat_lahir?>,
                                                        <?=date("d M 'y",strtotime($v->tgl_lahir))?></td>
                                                    <td><?=$v->ayah?></td>
                                                    <td><?=$v->ibu?></td>
                                                    <td><?=$v->tgl_buat?></td>
                                                    <td class="tindakan">
                                                        <a href="<?=base_url("dashboard/surat/detail/$surat/$v->id")?>"
                                                            class="btn btn-info" title="Lihat"><i
                                                                class="fas fa-eye"></i></a>
                                                        <button class="btn btn-success" type="button"
                                                            onclick="proses('<?=base_url("dashboard/surat/proses/$v->id/kelahiran/2")?>')">Selesai</button>

                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="optimization">
                            <div class="container"><br>
                                <div class="header">
                                    <h4 class="title" style="text-transform:capitalize;"><?=$judul?> Selesai
                                    </h4>
                                    <!-- <p class="category">Last Campaign Performance</p> -->
                                </div>
                                <div class="content">
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-hover table-striped" id="tbl_surat_selesai">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Pemohon</th>
                                                    <th>Nama Anak</th>
                                                    <th>Tgl Lahir</th>
                                                    <th>Nama Ayah</th>
                                                    <th>Nama Ibu</th>
                                                    <th>Tgl Permohonan</th>
                                                    <th>Tindakan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach ($selesai as $v): ?>
                                                <tr>
                                                    <td><?=$v->id_kelahiran?></td>
                                                    <td><?=$v->name?></td>
                                                    <td><?=$v->anak?></td>
                                                    <td><?=$v->tempat_lahir?>,
                                                        <?=date("d M 'y",strtotime($v->tgl_lahir))?></td>
                                                    <td><?=$v->ayah?></td>
                                                    <td><?=$v->ibu?></td>
                                                    <td><?=$v->tgl_buat?></td>
                                                    <td class="tindakan">
                                                        <a href="<?=base_url("dashboard/surat/detail/$surat/$v->id")?>"
                                                            class="btn btn-info" title="Lihat"><i
                                                                class="fas fa-eye"></i></a>

                                                        <a href="<?=base_url("dashboard/surat/cetak/$surat/$v->id")?>"
                                                            target="_blank" class="btn btn-warning" title="Cetak"><i
                                                                class="fas fa-print"></i></a>
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
        </div>
    </section>
    <!-- partial -->



</body>

</html>