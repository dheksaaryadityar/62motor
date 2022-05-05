<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>6 motor Customer</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url('assets/assets_shop/') ?>/css/styles.css" rel="stylesheet" />
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">62 MOTOR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo base_url('customer/dashboard') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('faq') ?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('customer/transaksi') ?>">Transaksi</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('register') ?>">Register</a></li>

            </ul>
            <div class="nav-item row-ml-2">

                <?php
                if ($this->session->userdata('nama')) { ?>
                    <a href=" <?php echo base_url('auth/logout') ?> " class="btn btn-secondary">Welcome <?php echo $this->session->userdata('nama') ?> <span class="btn btn-sm btn-warning">Logout</span> </a>
                    <a href=" <?php echo base_url('auth/ganti_password') ?> " class="btn btn-secondary"><span class="btn btn-sm btn-primary">Ganti Password</span> </a>
                <?php } else { ?>
                    <a href=" <?php echo base_url('auth/login') ?> "> <span class="btn btn-dark">Login</span> </a>
                <?php } ?>
            </div>

        </div>
    </div>
</nav>