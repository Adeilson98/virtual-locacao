<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2"><i class="fas fa-laptop-code"></i> <?php echo $titulo_pagina ?></h1>

        <div class="btn-toolbar mb-2 mb-md-0">

            <div class="btn-group me-2">

                <?php echo anchor('drivers/adicionardriver', '<i class="fas fa-plus-circle"></i> <span>Novo Driver</span>', array('class' => 'btn btn-outline-success')) ?>

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-12 col-sm-12">

            <table id="mainTable" class="table table-bordered align-middle">

                <thead class="table-dark">

                    <tr>

                        <th>Nome do Driver</th>

                        <th>Download</th>

                        <th>Ações</th>

                    </tr>

                </thead>

                <tbody>

                    <?php foreach ($drivers as $driver) { ?>

                        <tr>

                            <td><?= $driver->nome ?></td>

                            <td><a id="download" href="<?php echo base_url('upload/drivers/'); ?><?php echo $driver->driver; ?>" target="_blank" download><?php echo $driver->nome?></a></td>

                            <td class="text-center">

                                <?= anchor('drivers/editardriver/' . $driver->id, '<i class="fas fa-edit"></i>', array('title' => 'Editar')) ?>

                                <?= anchor('drivers/deletardriver/' . $driver->id, '<i class="fas fa-trash-alt"></i>', array('title' => 'Excluir')) ?>

                            </td>

                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</main>