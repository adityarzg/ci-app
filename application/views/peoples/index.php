<div class="container mt-3">

    <?php if ($this->session->flashData('flash')) : ?>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Peoples <strong>Berhasil</strong> <?= $this->session->flashData('flash'); ?>
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
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <form action="<?= base_url('peoples'); ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari data.." name="keyword" autocomplete="off">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-sm btn-success" href="<?= base_url(); ?>peoples/tambah" role="button">Tambah Data</a>
                </div>
            </div>

            <div class="row mt-3    ">
                <div class="table-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <small>Jumlah : <span style="font-weight: bold;"><?= $total_rows; ?></span> data</small>
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
                            <?php foreach ($peoples as $ppl) : ?>
                                <tr>
                                    <th><?= ++$start ?></th>
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
                    <?php if (empty($peoples)) : ?>
                        <div class="alert alert-danger col-md-12 mt-3">
                            Data Tidak Ditemukan!
                        </div>
                    <?php endif; ?>
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>


</div>