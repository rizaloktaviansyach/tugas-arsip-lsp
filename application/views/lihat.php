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
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary"> 
                <?php foreach ($dataSurat as $data) : ?>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Nomor Surat</td>
                                <td>:</td>
                                <td><?= $data->id_arsip ?></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>:</td>
                                <td><?= $data->id_kategori ?></td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td>:</td>
                                <td><?= $data->judul ?></td>
                            </tr>
                            <tr>
                                <td>Waktu Unggah</td>
                                <td>:</td>
                                <td><?= $data->tanggal ?></td>
                            </tr>
                        </table>

                        <embed src="<?= base_url() . "assets/uploads/pdf/" . $data->file ?>" width="100%" height="400"></embed>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url("arsip/index") ?>" class="btn btn-primary">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            <span>Kembali</span>
                        </a>
                        <a href="<?= base_url("arsip/download/" . $data->id_arsip) ?>" class="btn btn-warning download">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            <span>Unduh</span>
                        </a>
                        <a href="<?= base_url("arsip/edit/" . $data->id_arsip) ?>" class="btn btn-info">
                            <i class="fa fa-paperclip" aria-hidden="true"></i>
                            <span>Edit / Ganti File</span>
                        </a>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
        <!-- ./col -->
    </div>
</div><!-- /.container-fluid -->
</section>