<body>
    <!-- partial:index.partial.html -->
    <section class="design-process-section" id="process-tab">
        <div class="container">
            <div class="page">
                <div class="col-12">
                    <h1>Daftar Berita</h1>

                    <a href="<?=base_url("dashboard/berita/tambah")?>" class="btn btn-success btn-fill pull-right"
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
                                                    <th>Tanggal Berita</th>
                                                    <th>Penulis</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach ($berita as $v): ?>
                                                    <tr>
                                                        <td><?=$i++;?></td>
                                                        <td><?=$v->judul?></td>
                                                        <td><?=$v->deskripsi?></td>
                                                        <td>
                                                            <img src="<?=base_url('./assets/img/berita/').$v->gambar?>" alt="avatar" class="img-fluid" style="width: 200px;">
                                                        </td>                  
                                                        <td><?=$v->created_at?></td>
                                                        <td><?=$v->penulis?></td>
                                                        
                                                        <td class="tindakan">
                                                            <a href="<?=base_url("dashboard/berita/detail/$v->id_terbaru")?>"
                                                                class="btn btn-sm btn-info" title="Lihat"><i
                                                                    class="fas fa-eye"></i></a><br>

                                                            <a href="<?=base_url("dashboard/berita/edit/$v->id_terbaru")?>"
                                                                 class="btn btn-sm btn-warning" title="Edit"><i
                                                                    class="fas fa-edit"></i></a>
                                                                    
                                                            <a href="<?=base_url("dashboard/berita/delete/$v->id_terbaru")?>" onclick="isconfirm()"
                                                            class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>

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

<script>
    function isconfirm(){

        if(!confirm('Apakah Anda Yakin Menghapus ?')){
            event.preventDefault();
            return;
        }
        return true;
    }
</script>