<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qwords.com: Cloud Web Hosting Indonesia Akses Cepat Aman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('public/assets') ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('public/assets') ?>/main.css">
</head>

<body>
    <!-- navbar -->
    <?= $this->include('components/navbar') ?>

    <!-- hero -->
    <?= $this->include('components/hero') ?>

    <!-- cari domain -->
    <?= $this->include('components/domain') ?>

    <!-- produk utama -->
    <?= $this->include('components/productlist') ?>

    <!-- produk lain -->
    <?= $this->include('components/otherproduct') ?>

    <!-- solusi -->
    <?= $this->include('components/solusi') ?>

    <!-- komitmen -->
    <?= $this->include('components/komitmen') ?>

    <!-- client -->
    <?= $this->include('components/client') ?>

    <!-- partner -->
    <?= $this->include('components/partner') ?>

    <!-- publication -->
    <?= $this->include('components/publication') ?>

    <!-- payment guide -->
    <?= $this->include('components/payment') ?>

    <!-- kontak -->
    <?= $this->include('components/kontak') ?>


    <!-- footer -->
    <?= $this->include('components/footer') ?>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</body>

</html>