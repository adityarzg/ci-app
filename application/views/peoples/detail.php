<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Peoples
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h3><?= $peoples['nama']; ?></h3>
                        <small style="font-style:italic;"><?= $peoples['email'] ?></small>
                        <p class="mb-0" style="font-size: 20px;"><small><?= $peoples['perusahaan'] ?></small></p>
                        <p style="font-size: 20px;"><small><?= $peoples['alamat'] ?></small></p>
                    </blockquote>
                    <a href="<?= base_url(); ?>peoples" class="btn btn-sm btn-primary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>