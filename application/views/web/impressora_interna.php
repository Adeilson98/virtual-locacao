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

                    <b>Memória (Padrão)</b>

                    <p><?php echo $content->memoria; ?></p>

                    <b>Resolução (DPI)</b>

                    <p><?php echo $content->resolucao; ?></p>

                </div>

                <div class="collumn">

                    <b>Linguagem de Impressão</b>

                    <p><?php echo $content->linguagem_impressao; ?></p>

                    <b>Entrada de Papel</b>

                    <p><?php echo $content->entrada_papel; ?></p>

                    <b>Saida de Papel</b>

                    <p><?php echo $content->saida_papel; ?></p>

                </div>

            </div>

        </div>

    <?php } ?>

</section>