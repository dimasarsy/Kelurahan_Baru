<style media="screen">
.card {
    transition: 0.5s;
}
</style>
<section id="get-started" class="padd-section wow fadeInUp">
    <div class="containers">
        <div class="section-title text-center">
            <h2>Tambah Berita</h2><br>

            <?php echo $this->session->flashdata('upload_error'); ?>
        </div>
        <!-- <br> -->
        <div class="row">
            <div class="col-md-12">
                <form id="regForm" method="post" action="<?= base_url('dashboard/berita/in_berita'); ?>"
                    enctype="multipart/form-data">

                    <div class="tab-content" id="pills-tabContent">
                        <!-- Tab 1 -->
                        <div class="row g-2">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="penulis" placeholder="penulis"
                                        value="<?=$_SESSION['name']?>" disabled required>
                                    <label for="floatingInput">Nama Penulis <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="judul_seo"
                                        placeholder="Nama" required>
                                    <label for="floatingInput">Judul SEO<span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="judul"
                                        placeholder="judul" required>
                                    <label for="floatingInput">Judul Berita<span class="text-danger">*</span></label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="deskripsi"
                                        placeholder="deskripsi" required>
                                    <label for="floatingInput">Isi Berita<span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Gambar Berita<span class="text-danger">
                                        *(maks 2MB)</span> </label>
                                <input class="form-control" type="file" accept=".jpg, .png, .jpeg" name="gambar" requiredd multiple>
                            </div>

                        </div>
                        <div class="row g-2">



                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success form-control col-md-12 py-2">Simpan</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
