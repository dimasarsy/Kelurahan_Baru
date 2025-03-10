<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" />
</head>

<body>
    <div class="container">
        <div class="page">
            <h1>Status Pengajuan Surat</h1>

            <!-- tabs -->
            <div class="pcss3t pcss3t-effect-scale pcss3t-theme-1">
                <input type="radio" name="pcss3t" checked id="tab1" class="tab-content-first">
                <label for="tab1"><i class="icon-credit-card"></i>KTP</label>

                <input type="radio" name="pcss3t" id="tab2" class="tab-content-2">
                <label for="tab2"><i class="icon-picture"></i>Kartu Keluarga</label>

                <input type="radio" name="pcss3t" id="tab3" class="tab-content-3">
                <label for="tab3"><i class="icon-cogs"></i>SKTM</label>

                <input type="radio" name="pcss3t" id="tab4" class="tab-content-4">
                <label for="tab4"><i class="icon-globe"></i>Domisili</label>

                <input type="radio" name="pcss3t" id="tab5" class="tab-content-5">
                <label for="tab5"><i class="icon-moving"></i>Pindah</label>

                <input type="radio" name="pcss3t" id="tab6" class="tab-content-6">
                <label for="tab6"><i class="icon-police"></i>SKCK</label>

                <input type="radio" name="pcss3t" id="tab7" class="tab-content-7">
                <label for="tab7"><i class="icon-baby"></i>Kelahiran</label>

                <input type="radio" name="pcss3t" id="tab8" class="tab-content-8">
                <label for="tab8"><i class="icon-dead"></i>Kematian</label>

                <ul>
                    <li class="tab-content tab-content-first typography">
                        <h2>Pendaftaran KTP</h2><br>
                        <table id="ktp" class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="120">ID</th>
                                    <th width="120">NIK</th>
                                    <th width="120">Nama</th>
                                    <th width="120">TTL</th>
                                    <th width="120">Jenis Kelamin</th>
                                    <th width="140">Waktu Permohonan</th>
                                    <th width="100">Status</th>
                                    <th width="100">Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ktp as $v): ?>
                                    <tr>
                                        <th><?= $v->id_ktp ?></th>
                                        <td><?= $v->nik ?></td>
                                        <td><?= $v->name ?></td>
                                        <td><?= $v->tempat_lahir ?>, <?= date("d M 'y", strtotime($v->tgl_lahir)) ?></td>
                                        <td><?= ($v->jk == 'L' ? 'Laki-laki' : 'Perempuan') ?></td>
                                        <td><?= $v->tgl_buat ?></td>

                                        <td>
                                            <?php if ($v->status == 0): ?>
                                                <span class="badge badge-info"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 1): ?>
                                                <span class="badge badge-warning"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 2): ?>
                                                <span class="badge badge-success"><?php $surat->cek_status($v->status); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-danger"><?php $surat->cek_status($v->status); ?></span>
                                            <?php endif; ?>
                                        </td>

                                        <?php if ($v->status >= 2): ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/ktp/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <a href="<?= base_url("layanan/cetak/ktp/" . $_SESSION['nik'] . "/$v->id") ?>"
                                                    target="_blank" class="btn btn-warning" title="Cetak"><i
                                                        class="fas fa-print"></i></a>

                                            </td>
                                        <?php else:; ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/ktp/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <div class="btn btn-secondary" title="Belum Tersedia"><i
                                                        class="fas fa-print"></i></a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </li>

                    <li class="tab-content tab-content-2 typography">
                        <h2>Pendaftaran KK</h2><br>
                        <table id="kk" class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="120">ID</th>
                                    <th width="120">NIK</th>
                                    <th width="120">Nama</th>
                                    <th width="120">TTL</th>
                                    <th width="120">Jenis Kelamin</th>
                                    <th width="140">Waktu Permohonan</th>
                                    <th width="100">Status</th>
                                    <th width="100">Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ktp as $v): ?>
                                    <tr>
                                        <td><?= $v->id_kk ?></td>
                                        <td><?= $v->nik ?></td>
                                        <td><?= $v->name ?></td>
                                        <td><?= $v->tempat_lahir ?>,<?= date("d M 'y", strtotime($v->tgl_lahir)) ?></td>
                                        <td><?= ($v->jk == 'L' ? 'Laki-laki' : 'Perempuan') ?></td>
                                        <td><?= $v->tgl_buat ?></td>
                                    </tr>
                                    <td>
                                        <?php if ($v->status == 0): ?>
                                            <span class="badge badge-info"><?php $surat->cek_status($v->status); ?></span>
                                        <?php elseif ($v->status == 1): ?>
                                            <span class="badge badge-warning"><?php $surat->cek_status($v->status); ?></span>
                                        <?php elseif ($v->status == 2): ?>
                                            <span class="badge badge-success"><?php $surat->cek_status($v->status); ?></span>
                                        <?php else: ?>
                                            <span class="badge badge-danger"><?php $surat->cek_status($v->status); ?></span>
                                        <?php endif; ?>
                                    </td>

                                    <?php if ($v->status >= 2): ?>
                                        <td>
                                            <a href="<?= base_url("layanan/detail/ktp/$v->id") ?>" class="btn btn-info"
                                                title="Lihat"><i class="fas fa-eye"></i></a>

                                            <a href="<?= base_url("layanan/cetak/ktp/" . $_SESSION['nik'] . "/$v->id") ?>"
                                                target="_blank" class="btn btn-warning" title="Cetak"><i
                                                    class="fas fa-print"></i></a>

                                        </td>
                                    <?php else:; ?>
                                        <td>
                                            <a href="<?= base_url("layanan/detail/ktp/$v->id") ?>" class="btn btn-info"
                                                title="Lihat"><i class="fas fa-eye"></i></a>

                                            <div class="btn btn-secondary" title="Belum Tersedia"><i
                                                    class="fas fa-print"></i></a>
                                        </td>
                                    <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </li>

                    <tbody>
                        <?php foreach ($kk as $v): ?>
                            <tr>
                                <td><?= $v->id_kk ?></td>
                                <td><?= $v->nik ?></td>
                                <td><?= $v->name ?></td>
                                <td><?= $v->tempat_lahir ?>,
                                    <?= date("d M 'y", strtotime($v->tgl_lahir)) ?></td>
                                <td><?= ($v->jk == 'L' ? 'Laki-laki' : 'Perempuan') ?></td>
                                <td><?= $v->tgl_buat ?></td>

                            </tr>
                            <td>
                                <?php if ($v->status == 0): ?>
                                    <span class="badge badge-info"><?php $surat->cek_status($v->status); ?></span>
                                <?php elseif ($v->status == 1): ?>
                                    <span class="badge badge-warning"><?php $surat->cek_status($v->status); ?></span>
                                <?php elseif ($v->status == 2): ?>
                                    <span class="badge badge-success"><?php $surat->cek_status($v->status); ?></span>
                                <?php else: ?>
                                    <span class="badge badge-danger"><?php $surat->cek_status($v->status); ?></span>
                                <?php endif; ?>
                            </td>

                            <?php if ($kk->status >= 2): ?>
                                <td>
                                    <a href="<?= base_url("layanan/detail/kk/$v->id") ?>" class="btn btn-info"
                                        title="Lihat"><i class="fas fa-eye"></i></a>

                                    <a href="<?= base_url("layanan/cetak/kk/" . $_SESSION['nik'] . "/$v->id") ?>"
                                        target="_blank" class="btn btn-warning" title="Cetak"><i
                                            class="fas fa-print"></i></a>

                                </td>
                            <?php else:; ?>
                                <td>
                                    <a href="<?= base_url("layanan/detail/kk/$v->id") ?>" class="btn btn-info"
                                        title="Lihat"><i class="fas fa-eye"></i></a>

                                    <div class="btn btn-secondary" title="Belum Tersedia"><i
                                            class="fas fa-print"></i></a>
                                </td>
                            <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                    </li>


                    <li class="tab-content tab-content-3 typography">
                        <h2>Pendaftaran SKTM</h2><br>
                        <table id="sktm" class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="120">ID</th>
                                    <th width="120">NIK</th>
                                    <th width="120">Nama</th>
                                    <th width="120">TTL</th>
                                    <th width="120">Jenis Kelamin</th>
                                    <th width="140">Waktu Permohonan</th>
                                    <th width="100">Status</th>
                                    <th width="100">Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sktm as $v): ?>
                                    <tr>
                                        <th><?= $v->id_sktm ?></th>
                                        <td><?= $v->nik ?></td>
                                        <td><?= $v->name ?></td>
                                        <td><?= $v->tempat_lahir ?>, <?= date("d M Y", strtotime($v->tgl_lahir)) ?></td>
                                        <td><?= ($v->jk == 'l' ? 'Laki-laki' : 'Perempuan') ?></td>
                                        <td><?= $v->tgl_buat ?></td>

                                        <td>
                                            <?php if ($v->status == 0): ?>
                                                <span class="badge badge-info"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 1): ?>
                                                <span class="badge badge-warning"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 2): ?>
                                                <span class="badge badge-success"><?php $surat->cek_status($v->status); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-danger"><?php $surat->cek_status($v->status); ?></span>
                                            <?php endif; ?>
                                        </td>

                                        <?php if ($v->status >= 2): ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/sktm/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <a href="<?= base_url("layanan/cetak/sktm/" . $_SESSION['nik'] . "/$v->id") ?>"
                                                    target="_blank" class="btn btn-warning" title="Cetak"><i
                                                        class="fas fa-print"></i></a>

                                            </td>
                                        <?php else:; ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/sktm/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <div class="btn btn-secondary" title="Belum Tersedia"><i
                                                        class="fas fa-print"></i></a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </li>

                    <li class="tab-content tab-content-4 typography">
                        <h2>Pendaftaran Surat Keterangan Domisili</h2><br>
                        <table id="domisili" class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="120">ID</th>
                                    <th width="120">NIK</th>
                                    <th width="120">Nama</th>
                                    <th width="120">TTL</th>
                                    <th width="120">Jenis Kelamin</th>
                                    <th width="140">Waktu Permohonan</th>
                                    <th width="100">Status</th>
                                    <th width="100">Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($domisili as $d): ?>
                                    <tr>
                                        <th><?= $d->id_domisili ?></th>
                                        <td><?= $d->nik ?></td>
                                        <td><?= $d->name ?></td>
                                        <td><?= $d->tempat_lahir ?>, <?= date("d M 'y", strtotime($d->tgl_lahir)) ?></td>
                                        <td><?= ($d->jk == 'l' ? 'Laki-laki' : 'Perempuan') ?></td>
                                        <td><?= $d->tgl_buat ?></td>

                                        <td>
                                            <?php if ($d->status == 0): ?>
                                                <span class="badge badge-info"><?php $surat->cek_status($d->status); ?></span>
                                            <?php elseif ($d->status == 1): ?>
                                                <span class="badge badge-warning"><?php $surat->cek_status($d->status); ?></span>
                                            <?php elseif ($d->status == 2): ?>
                                                <span class="badge badge-success"><?php $surat->cek_status($d->status); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-danger"><?php $surat->cek_status($d->status); ?></span>
                                            <?php endif; ?>
                                        </td>

                                        <?php if ($d->status >= 2): ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/domisili/$d->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <a href="<?= base_url("layanan/cetak/domisili/" . $_SESSION['nik'] . "/$d->id") ?>"
                                                    target="_blank" class="btn btn-warning" title="Cetak"><i
                                                        class="fas fa-print"></i></a>

                                            </td>
                                        <?php else:; ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/domisili/$d->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <div class="btn btn-secondary" title="Belum Tersedia"><i
                                                        class="fas fa-print"></i></a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </li>
                    <li class="tab-content tab-content-5 typography">
                        <h2>Pendaftaran Surat Pindah</h2><br>
                        <table id="pindah" class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="120">ID</th>
                                    <th width="120">NIK</th>
                                    <th width="120">Nama</th>
                                    <th width="120">TTL</th>
                                    <th width="120">Jenis Kelamin</th>
                                    <th width="140">Waktu Permohonan</th>
                                    <th width="100">Status</th>
                                    <th width="100">Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pindah as $v): ?>
                                    <tr>
                                        <th><?= $v->id_pindah ?></th>
                                        <td><?= $v->nik ?></td>
                                        <td><?= $v->name ?></td>
                                        <td><?= $v->tempat_lahir ?>, <?= date("d M 'y", strtotime($v->tgl_lahir)) ?></td>
                                        <td><?= ($v->jk == 'l' ? 'Laki-laki' : 'Perempuan') ?></td>
                                        <td><?= $v->tgl_buat ?></td>

                                        <td>
                                            <?php if ($v->status == 0): ?>
                                                <span class="badge badge-info"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 1): ?>
                                                <span class="badge badge-warning"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 2): ?>
                                                <span class="badge badge-success"><?php $surat->cek_status($v->status); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-danger"><?php $surat->cek_status($v->status); ?></span>
                                            <?php endif; ?>
                                        </td>

                                        <?php if ($v->status >= 2): ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/pindah/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <a href="<?= base_url("layanan/cetak/pindah/" . $_SESSION['nik'] . "/$v->id") ?>"
                                                    target="_blank" class="btn btn-warning" title="Cetak"><i
                                                        class="fas fa-print"></i></a>

                                            </td>
                                        <?php else:; ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/pindah/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <div class="btn btn-secondary" title="Belum Tersedia"><i
                                                        class="fas fa-print"></i></a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </li>
                    <li class="tab-content tab-content-6 typography">
                        <h2>Pendaftaran SKCK</h2><br>
                        <table id="skck" class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="120">ID</th>
                                    <th width="120">NIK</th>
                                    <th width="120">Nama</th>
                                    <th width="120">TTL</th>
                                    <th width="120">Jenis Kelamin</th>
                                    <th width="140">Waktu Permohonan</th>
                                    <th width="100">Status</th>
                                    <th width="100">Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($skck as $v): ?>
                                    <tr>
                                        <th><?= $v->id_skck ?></th>
                                        <td><?= $v->nik ?></td>
                                        <td><?= $v->name ?></td>
                                        <td><?= $v->tempat_lahir ?>, <?= date("d M 'y", strtotime($v->tgl_lahir)) ?></td>
                                        <td><?= ($v->jk == 'l' ? 'Laki-laki' : 'Perempuan') ?></td>
                                        <td><?= $v->tgl_buat ?></td>

                                        <td>
                                            <?php if ($v->status == 0): ?>
                                                <span class="badge badge-info"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 1): ?>
                                                <span class="badge badge-warning"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 2): ?>
                                                <span class="badge badge-success"><?php $surat->cek_status($v->status); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-danger"><?php $surat->cek_status($v->status); ?></span>
                                            <?php endif; ?>
                                        </td>

                                        <?php if ($v->status >= 2): ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/skck/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <a href="<?= base_url("layanan/cetak/skck/" . $_SESSION['nik'] . "/$v->id") ?>"
                                                    target="_blank" class="btn btn-warning" title="Cetak"><i
                                                        class="fas fa-print"></i></a>

                                            </td>
                                        <?php else:; ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/skck/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <div class="btn btn-secondary" title="Belum Tersedia"><i
                                                        class="fas fa-print"></i></a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </li>
                    <li class="tab-content tab-content-7 typography">
                        <h2>Pendaftaran Keterangan Lahir</h2><br>
                        <table id="kelahiran" class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="120">ID</th>
                                    <th width="120">Pemohon</th>
                                    <th width="120">Nama Anak</th>
                                    <th width="120">TTL</th>
                                    <th width="120">Jenis Kelamin</th>
                                    <th width="140">Waktu Permohonan</th>
                                    <th width="100">Status</th>
                                    <th width="100">Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kelahiran as $v): ?>
                                    <tr>
                                        <th><?= $v->id_kelahiran ?></th>
                                        <th><?= $v->name ?></th>
                                        <td><?= $v->anak ?></td>
                                        <td><?= $v->tempat_lahir ?>, <?= date("d M 'y", strtotime($v->tgl_lahir)) ?></td>
                                        <td><?= ($v->jk == 'l' ? 'Laki-laki' : 'Perempuan') ?></td>
                                        <td><?= $v->tgl_buat ?></td>

                                        <td>
                                            <?php if ($v->status == 0): ?>
                                                <span class="badge badge-info"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 1): ?>
                                                <span class="badge badge-warning"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 2): ?>
                                                <span class="badge badge-success"><?php $surat->cek_status($v->status); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-danger"><?php $surat->cek_status($v->status); ?></span>
                                            <?php endif; ?>
                                        </td>

                                        <?php if ($v->status >= 2): ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/kelahiran/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <a href="<?= base_url("layanan/cetak/kelahiran/" . $_SESSION['nik'] . "/$v->id") ?>"
                                                    target="_blank" class="btn btn-warning" title="Cetak"><i
                                                        class="fas fa-print"></i></a>

                                            </td>
                                        <?php else:; ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/kelahiran/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <div class="btn btn-secondary" title="Belum Tersedia"><i
                                                        class="fas fa-print"></i></a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </li>
                    <li class="tab-content tab-content-8 typography">
                        <h2>Pendaftaran Keterangan Kematian</h2><br>
                        <table id="kematian" class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="120">ID</th>
                                    <th width="120">Pemohon</th>
                                    <th width="120">Nama Mayit</th>
                                    <th width="120">TTL</th>
                                    <th width="120">Jenis Kelamin</th>
                                    <th width="140">Waktu Permohonan</th>
                                    <th width="100">Status</th>
                                    <th width="100">Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kematian as $v): ?>
                                    <tr>
                                        <th><?= $v->id_kematian ?></th>
                                        <th><?= $v->name ?></th>
                                        <td><?= $v->mayit ?></td>
                                        <td><?= $v->tempat_lahir ?>, <?= date("d M 'y", strtotime($v->tgl_lahir)) ?></td>
                                        <td><?= ($v->jk == 'l' ? 'Laki-laki' : 'Perempuan') ?></td>
                                        <td><?= $v->tgl_buat ?></td>

                                        <td>
                                            <?php if ($v->status == 0): ?>
                                                <span class="badge badge-info"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 1): ?>
                                                <span class="badge badge-warning"><?php $surat->cek_status($v->status); ?></span>
                                            <?php elseif ($v->status == 2): ?>
                                                <span class="badge badge-success"><?php $surat->cek_status($v->status); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-danger"><?php $surat->cek_status($v->status); ?></span>
                                            <?php endif; ?>
                                        </td>

                                        <?php if ($v->status >= 2): ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/kematian/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <a href="<?= base_url("layanan/cetak/kematian/" . $_SESSION['nik'] . "/$v->id") ?>"
                                                    target="_blank" class="btn btn-warning" title="Cetak"><i
                                                        class="fas fa-print"></i></a>

                                            </td>
                                        <?php else:; ?>
                                            <td>
                                                <a href="<?= base_url("layanan/detail/kematian/$v->id") ?>" class="btn btn-info"
                                                    title="Lihat"><i class="fas fa-eye"></i></a>

                                                <div class="btn btn-secondary" title="Belum Tersedia"><i
                                                        class="fas fa-print"></i></a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </li>

                </ul>
            </div>
            <!--/ tabs -->
        </div>
    </div>
</body>

</html>
<!-- partial -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>