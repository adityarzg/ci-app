<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title>Halaman <?= $judul; ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">CI App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?php if($this->uri->segment(1) == ""){echo "active";}?>" aria-current="page" href="<?= base_url(); ?>">Home</a>
                    <a class="nav-link <?php if($this->uri->segment(1) == "about"){echo "active";}?>" href="<?= base_url(); ?>about">About</a>
                    <a class="nav-link <?php if($this->uri->segment(1) == "mahasiswa"){echo "active";}?>" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
                    <a class="nav-link <?php if($this->uri->segment(1) == "peoples"){echo "active";}?>" href="<?= base_url(); ?>peoples">Peoples</a>
                </div>
            </div>
        </div>
    </nav>