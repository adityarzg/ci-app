<div class="container">

    <div class="row mt-3">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="mb-3">
                            <label for="formNIM" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" autocomplete="off" value="<?= $mahasiswa['nim']; ?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="formNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="formJurusan" class="form-label">Jurusan</label>
                            <select class="form-select" name="jurusan" id="jurusan">
                            <?php foreach( $jurusan as $j ) : ?>
                                <?php if($j == $mahasiswa['jurusan']) : ?>
                                    <option selected value="<?= $j; ?>"><?= $j; ?></option>
                                <?php else : ?>
                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-warning">Kembali</a>
                        <button type="submit" class="btn btn-primary" name="tambah">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>