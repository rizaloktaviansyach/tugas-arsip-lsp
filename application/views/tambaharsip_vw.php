<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<section class="content-header">
    <h1>
        <?php echo $judul ?>
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $judul ?></li>
    </ol>
</section>
<!-- Content Header (Page header) -->
<!-- <section class="content-header">
    <div class="form-group row">
        <label for="colFormLabel" class="col-sm-4 col-form-label">Kategori</label>
    </div>
    <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Judul</label>
    </div>
    <div class="form-group row">
        <label for="inputState1" class="col-sm-2 col-form-label">Tanggal/Waktu</label>
    </div>
</section> -->


<section class="content-header">
    <?php echo form_open_multipart('tambah/tambah_arsip_aksi'); ?>

    <form>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-form-label" for="formGroupExampleInput">Kategori</label>
                                    <select name="id_kategori" class="form-control">
                                        <option value="Undangan">Undangan</option>
                                        <option value="Pengumuman">Pengumuman</option>
                                        <option value="Nota Dinas">Nota Dinas</option>
                                        <option value="Pemberitahuan">Pemberitahuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="formGroupExampleInput">Judul</label>
                                    <input type="text" name="judul" class="form-control" placeholder="judul berita" required>
                                </div>
                                <div class='input-group date'>
                                    <label class="col-form-label" for="formGroupExampleInput">Waktu Pengarsipan</label>
                                    <input type='date' name="tanggal" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Pilih File</label>
                                    <input type="file" class="form-control-file" name="userfile" required>
                                </div>
                                <button type="submit" value="Tambah" class="btn btn-primary">Tambahkan</button>
                                <br><br>
                                <div class="card-footer">
                                    <a href="<?= base_url("arsip/index") ?>" class="btn btn-primary float-right">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        <span>Kembali</span>
                                    </a>
                                </div>

    </form>
    <?= form_close() ?>
</section>