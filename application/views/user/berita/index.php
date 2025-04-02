<div class="container">
	<div class="container position-relative zindex-5 text-center pt-5 mt-lg-4 mt-xl-5">
		<h1 class="display-1 pt-4 mt-sm-3"><span class="text-black fw-normal">Informasi Terbaru </span><span
				class="d-inline-flex align-items-center"><span class="text" style="color:orangered">Kelurahan
					Palmerah</span></span></h1>
		<p style="margin-top:25px">Berikut kami berikan informasi terbaru di sekitar Kelurahan Palmerah</p>
		<p style="margin-top:-15px">setiap layanan memiliki artikel terkait layanan tersebut</p>
	</div>

	<div class="row row-cols-1 row-cols-md-3 g-4 p-5">
	<?php $i=1; foreach ($berita as $v): ?>

        <div class="col">
            <div class="card h-100">
                <a href="<?=base_url("berita/detail/$v->id_terbaru")?>"><img
                        src="<?=base_url('./assets/img/berita/').$v->gambar?>" class="card-img-top" style="height:200px;"
                        alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title"><?=$v->judul?></h5>
                    <p class="card-text"><?=$v->deskripsi?></p>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-danger" href="<?=base_url("berita/detail/$v->id_terbaru")?>">View Content</a>
                    </div>
                </div>
            </div>
		</div>

	<?php endforeach; ?>
    </div>
</div>