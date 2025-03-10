<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard | <?= $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />


    <!-- signature pad -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/signature-pad.js"></script>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

    <!-- tab  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>


    <script type="text/javascript">
    function proses(link) {
        $('#btnyakin').attr('href', link);
        $('#modalhapus').modal('show');
    }

    function buatKegiatan(link) {
        $('#formKegiatan').attr('action', link);
        $('#btnyakin').attr('href', link);
        $('#modalKegiatan').modal('show');
    }

    function buatRencana(link) {
        $('#formRencana').attr('action', link);
        $('#modalRencana').modal('show');
    }

    function tambahItem(link) {
        $('#formItem').attr('action', link);
        $('#modalItem').modal('show');
    }

    function catatan(link) {
        $('#formCatatan').attr('action', link);
        $('#modalCatatan').modal('show');
    }

    function buatTanggapan(link) {
        $('#formTanggapan').attr('action', link);
        $('#btnyakin').attr('href', link);
        $('#modaltanggapan').modal('show');
    }

    function showSign(id, nama_warga) {
        $('#idsurat').val($('#' + id).data("idsurat"));
        $('#kode').val($('#' + id).data("kode"));
        $('#nikwarga').val($('#' + id).data("nikwarga"));
        $('#sign-modal').modal('show');
    }

    // function doSign(id){
    //   $('#kode').val(id);
    //   $('#sign-modal').modal('show');
    // }

    window.datas = [];
    window.datab = '[]';
    window.datam = '[]';
    window.undef;

    function pilihItem(id, kode_kegiatan) {
        var kode = kode_kegiatan;
        var tipe = $('#' + id).data("tipe");
        var uraian = $('#' + id).data("uraian");
        var satuan = $('#' + id).data("satuan");
        var harga_satuan = $('#' + id).data("hst");
        var volume = $('#' + id + "-qty").val();

        // var databar;
        // var datamod;
        // if (tipe==1) {
        //   var databar = JSON.parse(window.datab);
        //   databar.push({"kode":kode+'.'+tipe, "uraian":uraian, "satuan":satuan, "volume":volume, "harga_satuan":harga_satuan, "tipe":tipe});
        //   window.datab = JSON.stringify(databar);
        // } else if (tipe==2) {
        //   var datamod = JSON.parse(window.datam);
        //   datamod.push({"kode":kode+'.'+tipe, "uraian":uraian, "satuan":satuan, "volume":volume, "harga_satuan":harga_satuan, "tipe":tipe});
        //   window.datam = JSON.stringify(datamod);
        // }
        if (tipe == 1 || tipe == 2) {
            window.datas.push({
                "kode": kode + '.' + tipe,
                "uraian": uraian,
                "satuan": satuan,
                "volume": volume,
                "harga_satuan": harga_satuan,
                "tipe": tipe
            });
        }
        // window.datas = JSON.parse(window.datab).concat(JSON.parse(window.datam));
        showItem(window.datas);
    }

    function showItem(data) {
        console.log(data);
        var html = '';
        $("input[name='daftarItem']").val(JSON.stringify(data));
        // $("input[name='daftarItemModal']").val(data2);
        var panjang = 0;
        if (data !== window.undef) {
            panjang = data.length;
        }
        var tipe = 0;
        for (var i = 0; i < panjang; i++) {
            if (data[i].tipe == 1) {
                tipe = "1-Belanja Barang";
            } else if (data[i].tipe == 2) {
                tipe = "2-Belanja Modal";
            } else {
                tipe = "Lainnya";
            }
            // html += '<tr><td>'+(i+1)+'</td><td>'+data[i].kode+'</td><td>'+data[i].uraian+'</td><td>'+data[i].volume+'</td><td>'+data[i].satuan+'</td><td>'+data[i].hst+'</td>';
            // $('#listitemkeuangan').append(`
            html += `
        <div class="row" id="rowitemkeuangan">
        <div class="col-md-2" style="display:none;">
        <label for="" class="control-label modal-label">Kode <span class="text-danger">*</span> </label>
        <input maxlength="7" class="form-control" type="text" name="kode[]" title="Isi Kode" value="` + data[i].kode + `" required readonly>
        </div>
        <div class="col-md-3">
        <label for="" class="control-label modal-label">Uraian <span class="text-danger">*</span> </label>
        <input class="form-control" type="text" name="uraian[]" title="Isi Uraian" value="` + data[i].uraian +
                `" required readonly>
        </div>
        <div class="col-md-2">
        <label for="" class="control-label modal-label">Volume <span class="text-danger">*</span> </label>
        <input class="form-control" type="number" min="1" pattern="[0-9]+" title="Masukkan Angka" name="volume[]" value="` +
                data[i].volume + `" required>
        </div>
        <div class="col-md-2">
        <label for="" class="control-label modal-label">Satuan <span class="text-danger">*</span> </label>
        <input class="form-control" type="text" name="satuan[]" value="` + data[i].satuan +
                `" required readonly>
        </div>
        <div class="col-md-2">
        <label for="" class="control-label modal-label">HST (Rp) <span class="text-danger">*</span> </label>
        <input class="form-control" type="number" min="1" pattern="[0-9]+" name="harga[]" title="Masukkan Angka" value="` +
                data[i].harga_satuan + `" required readonly>
        </div>
        <div class="col-md-2">
        <label for="" class="control-label modal-label">Tipe <span class="text-danger">*</span> </label>
        <input class="form-control" type="text" name="tipe[]" title="Masukkan Tipe" value="` + tipe + `" required readonly>
        </div>
        <div class="col-md-1">
        <label for="" class="control-label modal-label"><span class="text-danger"></span> </label>
        <button type="button" class="btn btn-danger btn-fill form-control" name="button" id="btnhapusitemkeuangan` +
                i + `" data-hapus="` + i + `" onclick="hapusItem(` + i + `)">Hapus</button>
        </div>
        </div>`;
        }
        // console.log(html);
        // $('#listItem').html(html);
        $('#listitemkeuangan').html(html);
    }


    function hapusItem(id) {
        // var data = JSON.parse(window.datas);
        // data.splice(id,1);
        // window.datas = JSON.stringify(data);
        window.datas.splice(id, 1);
        showItem(window.datas);
    }
    </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">