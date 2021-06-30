<div class="container">

    <div class="row mt-3">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Peoples
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $peoples['id']; ?>">
                        <div class="mb-3">
                            <label for="formNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" value="<?= $peoples['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="formEmail" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" autocomplete="off" value="<?= $peoples['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="formPerusahaan" class="form-label">Perusahaan</label>
                            <input type="text" class="form-control" name="perusahaan" id="perusahaan" autocomplete="off" value="<?= $peoples['perusahaan']; ?>">
                            <small class="form-text text-danger"><?= form_error('perusahaan'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="formAlamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="Alamat" autocomplete="off" value="<?= $peoples['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <a href="<?= base_url(); ?>peoples" class="btn btn-warning">Kembali</a>
                        <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>