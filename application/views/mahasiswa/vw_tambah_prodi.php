<div class="container-fluid">
    <h1 class="h3 mb-4 text-black-900">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Form Tambah Data Prodi</div>
                <div class="card-body">
                    <form action="" method="POST" encttype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Prodi">
                        </div><br>
                        <div class="form-group">
                            <label for="ruangan">Nama Ruangan</label>
                            <input type="text" name="ruangan" class="form-control" id="ruangan"
                                placeholder="Nama Ruangan">
                        </div><br>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option value="">Jurusan</option>
                                <option value="JTI">JTI</option>
                                <option value="JTN">JTN</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" class="form-control" id="akreditasi"
                                placeholder="Akreditasi">
                        </div><br>
                        <div class="form-group">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi"
                                placeholder="Nama Kaprodi">
                        </div><br>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri"
                                placeholder="Tahun Berdiri">
                        </div><br>
                        <div class="form-group">
                            <label for="output_lulusan">Output lulusan</label>
                            <input type="text" name="output_lulusan" class="form-control" id="output_lulusan"
                                placeholder="Output lulusan">
                        </div><br>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input form-control" name="gambar" id="gambar">
                            </div>
                        </div>
                        <br>
                        <a href="<?= base_url('Prodi')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
                    </form><br>
                </div>
            </div>
        </div>
    </div>
</div>