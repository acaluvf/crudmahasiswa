<div class="container-fluid">
    <h1 class="h3 mb-4 text-black-900">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Form Ubah Data Prodi</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $prodi['id']; ?>">

                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Prodi" value="<?= $prodi['nama']; ?>">
                        </div><br>

                        <div class="form-group">
                            <label for="ruangan">Nama Ruangan</label>
                            <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Nama Ruangan" value="<?= $prodi['ruangan']; ?>">
                        </div><br>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option value="">Jurusan</option>
                                <option value="JTI" <?php if ($prodi['jurusan'] == 'JTI') echo 'selected'; ?>>JTI</option>
                                <option value="JTN" <?php if ($prodi['jurusan'] == 'JTN') echo 'selected'; ?>>JTN</option>
                            </select>
                        </div><br>

                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="Akreditasi" value="<?= $prodi['akreditasi']; ?>">
                        </div><br>

                        <div class="form-group">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi" value="<?= $prodi['nama_kaprodi']; ?>">
                        </div><br>

                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri" value="<?= $prodi['tahun_berdiri']; ?>">
                        </div><br>

                        <div class="form-group">
                            <label for="output_lulusan">Output lulusan</label>
                            <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="Output lulusan" value="<?= $prodi['output_lulusan']; ?>">
                        </div><br>
                        <div class="form-group">
                            <img src="<?= base_url('assets/img/prodi/') . $prodi['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar','<small class="text-danger pl-3>', '</small>'); ?>
                            </div>
                        </div>
                        <a href="<?= base_url('Prodi'); ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Simpan Perubahan</button>
                    </form><br>
                </div>
            </div>
        </div>
    </div>
</div>
