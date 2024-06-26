<section id ="impressoras">
    
    <div class="whatsapp-button">
        <a href="https://wa.me/5511940292425" target = "_blank"><img src="<?php echo base_url('assets/site/images/whatsapp-logo.png'); ?>" alt="Logo Whatsapp"></a>
    </div>

    <h2>Confira as nossas impressoras <br> disponíveis para locação!</h2>

    <div class="flex-items">
        

        <?php foreach($impressoras as $impressora) { ?>

            <div class="item">
                <img src="<?php echo base_url('upload/impressoras/'); ?><?php echo $impressora->imagem; ?>">

                <h3><?php echo $impressora->nome; ?></h3>

                <p><?php echo substr($impressora->descricao, 0, 143); ?><?php echo '...'?></p>

                <a href="<?php echo base_url('impressora/'); ?><?php echo $impressora->id; ?>" class="btn-destaque">Saiba mais</a>
            </div>

        <?php }?>

    </div>

</section>