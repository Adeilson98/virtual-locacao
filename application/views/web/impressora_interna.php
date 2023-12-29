<section class="__wrap">

    <div class="whatsapp-button">
        <a href="https://wa.me/5511940292425" target = "_blank"><img src="<?php echo base_url('assets/site/images/whatsapp-logo.png'); ?>" alt="Logo Whatsapp"></a>
    </div>

    <?php foreach($query as $content) { ?>
    
        <h3><?php echo $content->nome; ?></h3>

    <?php } ?>

    <?php foreach($query as $content) { ?>

        <div class="dobra1">

            <img src="<?php echo base_url('upload/impressoras/'); ?><?php echo $content->imagem; ?>">

            <div class="descriptions">
                <h1>Descrição</h1>

                <p><?php echo $content->descricao; ?></p>

            </div>

        </div>

    <?php } ?>


    <?php foreach($query as $content) { ?>

        <div class="dobra2">

            <h2>Informações técnicas</h2>

            <div class="rows">

                <div class="collumn">

                    <b>Cor / Mono</b>

                    <p><?php echo $content->cor_mono; ?></p>

                    <b>Formato de Papel</b>

                    <p><?php echo $content->formato_papel; ?></p>

                    <b>Velocidade de Impressão</b>

                    <p><?php echo $content->velocidade_impressao; ?></p>

                    <b>Frente e Verso Automático</b>

                    <p><?php echo $content->frente_verso_automatico; ?></p>
                    
                    <b>Digitalização em Rede</b>

                    <p><?php echo $content->digitalizacao_rede; ?></p>

                </div>

                <div class="collumn">

                    <b>Alimentação Automática</b>

                    <p><?php echo $content->alimentacao_automatica; ?></p>

                    <b>Conectividade</b>

                    <p><?php echo $content->conectividade; ?></p>

                    <b>Ciclo Mensal</b>

                    <p><?php echo $content->ciclo_mensal; ?></p>

                    <b>Rendimento insumos</b>

                    <p><?php echo $content->rendimento_insumos; ?></p>

                </div>

            </div>

        </div>

    <?php } ?>

</section>