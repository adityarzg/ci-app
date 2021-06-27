<div class="container mt-3">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <h3>Daftar <?= $judul; ?></h3>
            <hr>

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
                                <a href="<?= base_url(); ?>/mahasiswa/detail/<?= $mhs['nim']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-primary">Detail</a>
                                <a href="<?= base_url(); ?>/mahasiswa/ubah/<?= $mhs['nim']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-success tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-nim="<?= $mhs['nim'] ?>">Edit</a>
                                <a href="<?= base_url(); ?>/mahasiswa/hapus/<?= $mhs['nim']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                            </th>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>