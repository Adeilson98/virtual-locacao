<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2"><i class="fas fa-laptop-code"></i> <?php echo $titulo_pagina ?></h1>

    </div>



    <section id="error-area">

        <div class="row">

            <div class="col-12 col-sm-12">

                <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>

                <?= $this->session->userdata('msg'); ?>

            </div>

        </div>

    </section>





    <div class="row">

        <div class="col-12 col-sm-12 mb-4">

            <form action="" method="post" enctype="multipart/form-data">

                <div class="row">

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="tituloDriver" class="form-label">Nome do Driver</label>

                            <input type="text" class="form-control" id="tituloDriver" name="tituloDriver">

                        </div>

                    </div>

                    <br>

                    <div class="col-12">

                        <div class="mb-3">

                            <label for="driver" class="form-label">Driver</label>

                            <div class="block-driver">

                                <label for="driver"><img src="<?php echo base_url('assets/dashboard/images/cloud.png'); ?>" alt="Nuvem"></label>

                                <p id="driver-name"></p>

                                <input type="file" name="driver[]" id="driver" onchange="handleDriverSelect()">
                            </div>

                        </div>

                    </div>


                    <div class="col-12">

                        <input type="hidden" name="driverFile" id="driverName">

                        <button type="submit" name="send" class="btn btn-success mt-3 mb-3 w-100">Adicionar Driver</button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</main>