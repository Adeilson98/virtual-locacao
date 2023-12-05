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

                            <label for="tituloImpressora" class="form-label">Nome da Impressora</label>

                            <input type="text" class="form-control" id="tituloImpressora" name="tituloImpressora">

                        </div>

                    </div>

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="categoriaPost" class="form-label">Categoria</label><br>

                            <select name="categoria" id="categoria">
                                <option value="">Teste</option>
                                <option value="">Teste</option>
                                <option value="">Teste</option>
                                <option value="">Teste</option>
                            </select>

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="cor" class="form-label">Cor/Mono</label>

                            <input type="text" class="form-control" id="cor" name="cor">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="formatoPapel" class="form-label">Formato do Papel</label>

                            <input type="text" class="form-control" id="formatoPapel" name="formatoPapel">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="memoria" class="form-label">Memória</label>

                            <input type="text" class="form-control" id="memoria" name="memoria">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="resolucao" class="form-label">Resolução</label>

                            <input type="text" class="form-control" id="resolucao" name="resolucao">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="linguagem" class="form-label">Linguagem de Impressão</label>

                            <input type="text" class="form-control" id="resolucao" name="linguagem">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="entradaPapel" class="form-label">Entrada de Papel</label>

                            <input type="text" class="form-control" id="resolucao" name="entradaPapel">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="saidaPapel" class="form-label">Saída de Papel</label>

                            <input type="text" class="form-control" id="resolucao" name="saidaPapel">

                        </div>

                    </div>

                    <div class="col-12">

                        <div class="mb-4">

                            <label for="editor1" class="form-label">Descrição</label>

                            <textarea id="editor1" class="form-control" name="descricao" placeholder="Add Body"></textarea>

                        </div>

                    </div>

                    <div class="col-12">

                        <div class="mb-3">

                            <label for="imagemDestaque" class="form-label">Imagem Destaque</label>

                            <br />
 
                            <div class="thumb" onclick="selectImg()">
                                <img src="<?php echo base_url('assets/dashboard/images/image_default.png'); ?>" id="img" class="img">

                                <div class="remove" onclick="removeImg()"><i class="fas fa-trash-alt"></i></div>
                            </div>

                            <input type="file" name="imagemDestaque" class="form-control-file" id="imgDestaque" onchange="readUrl(this)">

                        </div>

                    </div>

                    <div class="col-12">

                        <button type="submit" class="btn btn-success mt-3 mb-3 w-100">Adicionar nova impressora</button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</main>