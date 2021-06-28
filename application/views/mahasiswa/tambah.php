<div class="container">

    <div class="row mt-3">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="formNIM" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="formNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="formJurusan" class="form-label">Jurusan</label>
                            <select class="form-select" name="jurusan" id="jurusan">
                                <option selected></option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Manajemen Informasi">Manajemen Informasi</option>
                            </select>
                        </div>
                        <?php if (validation_errors()) : ?>
                            <span style="color:red;font-style:italic"><?= validation_errors(); ?></span>
                        <?php endif; ?>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-warning">Kembali</a>
                        <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>