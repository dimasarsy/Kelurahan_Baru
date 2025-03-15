<div class="container">
    <div class="page">
        <h1 class="title mb-4" style="text-transform:capitalize;"><?=$this->uri->segment(5)?> Data <?=$judul?></h1>
        <div class="col-md-12">
            <div class="card" style="padding:0px 20px">
                <div class="header mt-3 mb-3">
                    <a href="<?=base_url("dashboard/berita")?>" class="btn btn-warning btn-fill pull-right">Kembali</a>

                </div>
                <?php
                    if($this->uri->segment(5)=='ubah'){
                        $action = $this->uri->segment(5).'/'.$this->uri->segment(6);
                    } else {
                        $action = $this->uri->segment(5);
                    }
                ?>
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="content">
                                    <?php echo $this->session->flashdata('transaksi_error'); ?>
                                    <?php echo form_open_multipart(base_url("dashboard/berita/edit_berita/$berita->id")) ?>

                                    <div class="form-floating  mb-3">
                                        <select class="form-control" name="category">
                                            <?php foreach ($d_category as $v => $c){
                                              $s = '';
                                              if ($v==$berita->category) {
                                                $s = "selected";
                                              }
                                              echo "<option value='$v' $s>$c</option>";
                                            } ?>
                                        </select>
                                        <!-- <select class="form-select" name="category" required>
                                            <option value="pengumuman">Pengumuman
                                            </option>
                                            <option value="utama">Utama
                                            </option>
                                            <option value="artikel">Artikel
                                            </option>
                                            <option value="event">Event-Kegiatan
                                            </option>
                                        </select> -->
                                        <label for="floatingSelectGrid">Kategori Berita <span
                                                class="text-danger">*</span></label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" name="title" placeholder="title"
                                            value="<?=$berita->title?>" required>
                                        <label for="floatingInput" class="control-label">Judul Berita <span
                                                class="text-danger">*</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="desc" placeholder="Isi Berita"
                                            id="floatingTextarea2" style="height: 150px"><?=$berita->desc?></textarea>
                                        <label for="floatingTextarea2">Isi Berita<span class="text-danger">*</label>
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Foto<span class="text-danger">
                                                *</span> </label>
                                        <input class="form-control" type="file" accept=".jpg, .png, .jpeg" name="photo"
                                            requiredd multiple>
                                    </div>

                                    <input type="submit" value='submit'>

                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    // $('#tbl_warga').DataTable();
});
</script>