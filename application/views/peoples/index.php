<div class="container mt-3">

    <?php if ($this->session->flashData('flash')) : ?>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashData('flash'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>Data <?= $judul; ?></h3>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-sm btn-success" href="<?= base_url(); ?>peoples/tambah" role="button">Tambah Data</a>
                </div>
            </div>

            <div class="row mt-3    ">
                <div class="table-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%;">No</th>
                                <th scope="col" style="width: 20%;">Nama</th>
                                <th scope="col" style="width: 20%;">Email</th>
                                <th scope="col" style="width: 20%;">Perusahaan</th>
                                <th scope="col" style="width: 20%;">Alamat</th>
                                <th scope="col" style="width: 15%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($peoples as $ppl) : ?>
                                <tr>
                                    <th><?= $no++ ?></th>
                                    <td><?= $ppl['nama'] ?></td>
                                    <td><?= $ppl['email'] ?></td>
                                    <td><?= $ppl['perusahaan'] ?></td>
                                    <td><?= $ppl['alamat'] ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>peoples/detail/<?= $ppl['id']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-primary">Detail</a>
                                        <a href="<?= base_url(); ?>peoples/ubah/<?= $ppl['id']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-success">Edit</a>
                                        <a href="<?= base_url(); ?>peoples/hapus/<?= $ppl['id']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>