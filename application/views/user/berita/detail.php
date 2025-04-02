<div class="container">
<h1>Data <?=$judul?></h1>
    <div class="row row-cols-9 g-4 p-5">
        <div class="col">
            <div class="card h-100">
                    <img src="<?=base_url('./assets/img/berita/').$berita->gambar?>" class="card-img-top img-fluid" style="height:200px;" alt="...">
                
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 ">
                            <p class="card-text">Penulis : <?=$berita->penulis?> | <?=$berita->created_at?></p>
                        </div>
                    </div>
                        
                <div class="card-body">
                    <h5 class="card-title"><?=$berita->judul?></h5>
                    <p class="card-text"><?=$berita->deskripsi?></p>
                </div>
            </div>
        </div>
    </div>
</div>
