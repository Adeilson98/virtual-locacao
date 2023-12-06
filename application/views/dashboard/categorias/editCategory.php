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

                            <label for="tituloCategoria" class="form-label">Nome da Categoria</label>

                            <input type="text" class="form-control" id="tituloCategoria" name="tituloCategoria" value="<?php echo $query->nome; ?>">

                        </div>

                    </div>

                    <div class="col-12">

                        <input type="hidden" name="id" value="<?php echo $query->id; ?>">

                        <button type="submit" class="btn btn-success mt-3 mb-3 w-100">Editar Categoria</button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</main>