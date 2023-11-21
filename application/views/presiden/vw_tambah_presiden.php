<div class="container-fluid">
    <h1 class="h3 mb-4 text-black-900">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Form Tambah Data Calon Presiden</div>
                <div class="card-body">
                    <form action="<?= base_url('Presiden/upload'); ?>" method="POST">
                    <div class="form-group">
                            <label for="nik"></label>
                            <input type="text" name="nik" class="form-control" id="nik"
                                placeholder="NIK">
                            </div>
                        <div class="form-group">
                            <label for="nama_lengkap"></label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap"
                                placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                            <label for="asal"></label>
                            <input type="text" name="asal" class="form-control"
                                id="asal" placeholder="Asal">
                            </div>
                        <div class="form-group">
                            <label for="partai_pendukung"></label>
                            <input type="text" name="partai_pendukung" class="form-control" id="partai_pendukung"
                                placeholder="partai_pendukung">
                            </div>
                        <div class="form-group">
                            <label for="riwayat_kerja"></label>
                            <input type="text" name="riwayat_kerja" class="form-control"
                                id="riwayat_kerja" placeholder="Riwayat Kerja">
                            </div>
                        <div class="form-group">
                            <label for="umur"></label>
                            <input type="text" name="umur" class="form-control" id="umur"
                                placeholder="umur">
                            </div><br>
                        <a href="base_url('Presiden')" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah"
                            class="btn btn-primary float-right">Tambah Calon Presiden</button>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
</div>
