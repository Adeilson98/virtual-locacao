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

                            <input type="text" class="form-control" id="tituloImpressora" name="tituloImpressora" value="<?php echo $query->nome; ?>">

                        </div>

                    </div>

                    <div class="col-4">

                        <div class="mb-3">

                            <label for="categoriaPost" class="form-label">Categoria</label><br>

                            <select name="categoria" id="categoria">

                                <?php foreach($categorias as $categoria) { ?>

                                    <option value="<?php echo $categoria->nome; ?>"><?php echo $categoria->nome; ?></option>

                                <?php } ?>

                            </select>

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="cor" class="form-label">Cor/Mono</label>

                            <input type="text" class="form-control" id="cor" name="cor" value="<?php echo $query->cor_mono; ?>">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="formatoPapel" class="form-label">Formato do Papel</label>

                            <input type="text" class="form-control" id="formatoPapel" name="formatoPapel" value="<?php echo $query->formato_papel; ?>">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="memoria" class="form-label">Velocidade de Impressão</label>

                            <input type="text" class="form-control" id="memoria" name="velocidade_impressao" value="<?php echo $query->velocidade_impressao; ?>">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="resolucao" class="form-label">Frente e Verso Automático</label>

                            <input type="text" class="form-control" id="resolucao" name="frente_verso" value="<?php echo $query->frente_verso_automatico; ?>">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="linguagem" class="form-label">Digitalização em Rede</label>

                            <input type="text" class="form-control" id="resolucao" name="digitalizacao_rede" value="<?php echo $query->digitalizacao_rede; ?>">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="entradaPapel" class="form-label">Alimentação Automática</label>

                            <input type="text" class="form-control" id="resolucao" name="alimentacao_automatica" value="<?php echo $query->alimentacao_automatica; ?>">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="saidaPapel" class="form-label">Conectividade</label>

                            <input type="text" class="form-control" id="resolucao" name="conectividade" value="<?php echo $query->conectividade; ?>">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="saidaPapel" class="form-label">Ciclo Mensal</label>

                            <input type="text" class="form-control" id="resolucao" name="ciclo_mensal" value="<?php echo $query->ciclo_mensal; ?>">

                        </div>

                    </div>

                    <div class="col-6">

                        <div class="mb-3">

                            <label for="saidaPapel" class="form-label">Rendimento insumos</label>

                            <input type="text" class="form-control" id="resolucao" name="rendimento_mensal" value="<?php echo $query->rendimento_insumos; ?>">

                        </div>

                    </div>

                    <div class="col-12">

                        <div class="mb-4">

                            <label for="editor1" class="form-label">Descrição</label>

                            <textarea id="editor1" class="form-control" name="descricao" placeholder="Add Body"><?php echo $query->descricao; ?></textarea>

                        </div>

                    </div>

                    <div class="col-12">

                        <div class="mb-3">

                            <label for="imagemDestaque" class="form-label">Imagem Destaque</label>

                            <br />
 
                            <div class="thumb" onclick="selectImg()">
                                <img src="<?php echo base_url('upload/impressoras/') ?><?php echo $query->imagem; ?>" id="img" class="img">

                                <div class="remove" onclick="removeImg()"><i class="fas fa-trash-alt"></i></div>
                            </div>

                            <input type="file" name="imagemDestaque[]" class="form-control-file" id="imgDestaque" onchange="readUrl(this), handleFileSelect()">

                        </div>

                    </div>

                    <div class="col-12">

                        <input type="hidden" id="fileNames" name="fileNames" value="<?php echo $query->imagem; ?>">

                        <input type="hidden" name="id" value="<?php echo $query->id; ?>">

                        <button type="submit" class="btn btn-success mt-3 mb-3 w-100">Adicionar nova impressora</button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</main>