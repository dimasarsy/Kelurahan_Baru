<section class="design-process-section" id="process-tab">
    <div class="container">
        <div class="page">
            <div class="col-12">
                <h1>Managemen User</h1>
                <br><br>
                <a href="#"
                    class="btn btn-success btn-fill pull-right" style="margin-top: -25px"><i class="fa fa-plus"
                        aria-hidden="true"></i>
                    <href> Tambah
                </a><br>
            </div>
            <tb>
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th style='width:40px'>No</th>
                            <th>Email</th>
                            <th>NIK </th>
                            <th>Nama Lengkap</th>
                            <th>Foto</th>
                            <th>Level</th>
                            <th style='width:60px'>Action</th>
                        </tr>
                    </thead>
                    <!-- <tbody>
                        <?php $i=1; foreach ($baru as $v): ?>
                            <tr>
                                <td><?=$v->id_ktp?></td>
                                <td><?=$v->nik?></td>
                                <td><?=$v->name?></td>
                                <td><?=$v->tempat_lahir?>,
                                    <?=date("d M 'y",strtotime($v->tgl_lahir))?></td>
                                <td><?=($v->jk=='L'?'Laki-laki':'Perempuan')?></td>
                                <td><?=$v->tgl_buat?></td>
                                <td class="tindakan">
                                    <a href="<?=base_url("dashboard/surat/detail/$surat/$v->id")?>"
                                        class="btn btn-info btn-fill" title="Lihat">Lihat</a>
                                </td>
                                </tr>
                        <?php endforeach; ?>
                    </tbody> -->
                </table>
            </div>
        </div>
    </div>
</section>