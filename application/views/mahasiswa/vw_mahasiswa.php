<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                <div class="col-md-6"><a href="<?= base_url() ?>Mahasiswa/tambah" class="btn btn-primary">Tambah Mahasiswa</a></div>
                <div class="table-responsive">
                    <?=$this->session->flashdata('message');?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Prodi</th>
                                <th>Sekolah</th>
                                <th>No Hp</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($mahasiswa as $us) : ?>
                                <tr>
                                    <td> <?= $i; ?>.</td>
                                    <td> <?= $us['nama']; ?>.</td>
                                    <td> <?= $us['nim']; ?>.</td>
                                    <td> <?= $us['jenis_kelamin']; ?>.</td>
                                    <td> <?= $us['email']; ?>.</td>
                                    <td> <?= $us['prodi']; ?>.</td>
                                    <td> <?= $us['asal_sekolah']; ?>.</td>
                                    <td> <?= $us['no_hp']; ?>.</td>
                                    <td> <?= $us['alamat']; ?>.</td>
                                    <td>
                                        <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                        <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>