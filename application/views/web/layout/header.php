<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- CSS -->

    <link rel="stylesheet" href="<?php echo base_url('assets/site/css/main.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/site/css/home.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/site/css/header.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/site/css/footer.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/site/css/banner.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/site/css/whatsapp-button.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/site/css/hamburger-menu.css'); ?>">

    <!-- Font Awesome -->

    <link data-require="fontawesome@5.5.0" data-semver="5.5.0" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />

</head>
<body id="home">
    
    <header>

        <div class="menu-mobile">

            <a href=""><img src="<?php echo base_url('assets/site/images/logo-virtual.png'); ?>"></a>

            <div class="hamburger-menu">
                <div class="bars"></div>
            </div>

        </div>

        <nav>
            <a href="../" class="brand"><img src="<?php echo base_url('assets/site/images/logo-virtual.png') ?>" alt="Logo" class="logo"></a>

            <a href="#sobre">Sobre</a>

            <!-- <a href="">Serviços</a> -->

            <a href="<?php echo base_url('impressoras/'); ?>">Impressoras</a>

            <a href="#contato">Contato</a>
        </nav>
    </header>