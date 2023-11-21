
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
                <div class="card-header text-center">Form Ubah Data Calon Presiden</div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('presiden/update'); ?> " method="POST">
                    <input type="hidden" name="id" value="<?= $presiden['id']; ?>">
                    <div class="form-group">
                        <label for="nik"></label>
                        <input type="text" name="nik" value="<?= $presiden['nik']; ?>" class="form-control" id="nik"
                            placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap"></label>
                        <input type="text" name="nama_lengkap" value="<?= $presiden['nama_lengkap']; ?>"
                            class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="asal"></label>
                        <input type="text" name="asal" value="<?= $presiden['asal']; ?>" class="form-control" id="asal"
                            placeholder="Asal">
                    </div>
                    <div class="form-group">
                        <label for="partai_pendukung"></label>
                        <input type="text" name="partai_pendukung" value="<?= $presiden['partai_pendukung']; ?>"
                            class="form-control" id="partai_pendukung" placeholder="Partai Pendukung">

                    </div>
                    <div class="form-group">
                        <label for="riwayat_kerja"></label>
                        <input type="text" name="riwayat_kerja" value="<?= $presiden['riwayat_kerja']; ?>"
                            class="form-control" id="riwayat_kerja" placeholder="Riwayat Kerja">

                    </div>
                    <div class="form-group">
                        <label for="umur"></label>
                        <input type="text" name="umur" value="<?= $presiden['umur']; ?>" class="form-control" id="umur"
                            placeholder="umur"><br><br>

                    </div><br>
                    <a href="<?= base_url('presiden') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Presiden
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
