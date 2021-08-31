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
<section class="content-header">
    <?php echo anchor('tambah/tambah_arsip', '<button type="button" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>
 Tambah Data</button>'); ?>
    <p></p>
    <style>
        table,
        th,
        td {
            text-align: center;
        }

        table {
            margin-top: 20px;
            font-family: 'Lato';
        }
    </style>
    <div class="table-responsive">
        <table class="table table-striped example">
            <thead>
                <tr>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Waktu Pengarsipan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($arsip as $a) {
                ?>
                    <tr>
                        <td style="text-transform: capitalize;">
                            <?= $a->id_arsip ?>
                        </td>
                        <td>
                            <?= $a->id_kategori ?>
                        </td>
                        <td>
                            <?= $a->judul ?>
                        </td>
                        <td>
                            <?= $a->tanggal ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger hapus_arsip" data-id="<?php echo $a->id_arsip; ?>"><i aria-hidden="true"></i> Hapus</button>
                            <?php echo anchor('arsip/download/' . $a->id_arsip, '<button type="button" class="btn btn-warning"><i aria-hidden="true"></i> Unduh</button>'); ?>
                            <?php echo anchor('arsip/show/' . $a->id_arsip, '<button type="button" class="btn btn-info"><i aria-hidden="true"></i> Lihat</button>'); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>