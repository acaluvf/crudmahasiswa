<div class="container-fluid">
    <h1 class="h3 mb-4 text-black-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Presiden/tambah" class="btn btn-info mb-2">Tambah Calon Presiden</a></div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>NIK</td>
                        <td>Nama Lengkap</td>
                        <td>Asal</td>
                        <td>Partai Pendukung</td>
                        <td>Riwayat Kerja</td>
                        <td>Umur</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($presiden as $us) : ?>
                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td><?= $us['nik']; ?></td>
                        <td><?= $us['nama_lengkap']; ?></td>
                        <td><?= $us['asal']; ?></td>
                        <td><?= $us['partai_pendukung']; ?></td>
                        <td><?= $us['riwayat_kerja']; ?></td>
                        <td><?= $us['umur']; ?></td>
                        <td>
                            <a href="<?= base_url('presiden/hapus/') . $us['id']; ?>" class="badge bg-danger">Hapus</a>
                            <a href="<?= base_url('presiden/edit/') . $us['id']; ?>" class="badge bg-warning">Edit</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>