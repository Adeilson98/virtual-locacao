<!DOCTYPE html>

<html lang="pt-br">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Igor Henrique Constant">

    <title>Gerenciador de Conteúdo - Virtual Locações</title>



    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">


    <!-- Jquery -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- CKEditor -->

    <script src="https://cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>



    <!-- Font Awesome -->

    <script src="https://kit.fontawesome.com/7bc0885a91.js"></script>



    <!-- Favicon -->

    <link rel="shortcut icon" href="<?php echo base_url("assets/dashboard/images/") ?>" type="image/x-icon">



    <!-- Upload -->

    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/js/upload/jquery.fileuploader-theme-thumbnails.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/js/upload/jquery.fileuploader.css') ?>">





    <!-- CSS -->

    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/main.css') ?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/dashboard.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/sort-item.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/image-preview.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/driver.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/bootstrap.min.css') ?>">



    <!-- Data Table -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" />

</head>



<body>



    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-3 shadow">

        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Virtual Locações</a>

        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="navbar-nav">

            <div class="nav-item text-nowrap">

                <a class="nav-link px-3" href="login/sair"><b>LOGOUT</b> <i class="fas fa-sign-out-alt"></i></a>

            </div>

        </div>

    </header>



    <div class="container-fluid">

        <div class="row">

            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

                <div class="position-sticky pt-3 bottom">

                    <ul class="nav flex-column">

                        <li class="nav-item">

                            <?php echo anchor('admin', '<span><i class="fas fa-tachometer-alt"></i> Dashboard</span>', array('class' => 'nav-link')) ?>

                        </li>

                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">

                        <span>Módulos - Site</span>

                    </h6>

                    <ul class="nav flex-column">

                        <li class="nav-item">

                            <?php echo anchor('impressoras_admin', '<span><i class="fas fa-laptop-code"></i> Impressoras</span>', array('class' => 'nav-link')) ?>

                        </li>

                    </ul>

                    <ul class="nav flex-column">

                        <li class="nav-item">

                            <?php echo anchor('categorias', '<span><i class="fas fa-laptop-code"></i>Categorias</span>', array('class' => 'nav-link')) ?>

                        </li>

                    </ul>

                    <ul class="nav flex-column">

                        <li class="nav-item">

                            <?php echo anchor('drivers', '<span><i class="fas fa-laptop-code"></i>Drivers</span>', array('class' => 'nav-link')) ?>

                        </li>

                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">

                        <span>Cadastros</span>

                    </h6>

                    <ul class="nav flex-column">

                        <li class="nav-item">

                            <?php echo anchor('usuarios', '<span><i class="fas fa-users"></i> Usuários</span>', array('class' => 'nav-link')) ?>

                        </li>

                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">

                        <span>Manutenção</span>

                    </h6>

                    <ul class="nav flex-column">

                        <li class="nav-item">

                            <?php echo anchor('backup/gerarsql', '<i class="fas fa-cloud-download-alt"></i> Backup SQL</span>', array('class' => 'nav-link')) ?>

                        </li>

                    </ul>

                </div>

            </nav>