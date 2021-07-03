<div class="container mt-3">

    <div class="flash-data" data-flashdata="<?= $this->session->flashData('flash'); ?>"></div>
    <!-- <?php if ($this->session->flashData('flash')) : ?>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashData('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?> -->

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <h3>Daftar <?= $judul; ?></h3>
            <hr>

            <div class="row mt-3">
                <div class="col-md-12">
                    <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-sm btn-success">Tambah Data</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-8">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari data mahasiswa.." name="keyword">
                            <button class="btn btn-warning" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <th><?= $no++ ?></th>
                            <th><?= $mhs['nama'] ?></th>
                            <th>
                                <a href="<?= base_url(); ?>/mahasiswa/detail/<?= $mhs['id']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-primary">Detail</a>
                                <a href="<?= base_url(); ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-success">Edit</a>
                                <a href="<?= base_url(); ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-danger tombol-hapus">Hapus</a>
                            </th>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-warning col-md-12 mt-3" role="alert">
                    Data Mahasiswa Tidak Ditemukan!
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>