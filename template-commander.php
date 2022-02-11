<?php

/* Template Name: Commander
*/
$metas = get_post_meta(get_the_ID());
 get_header(); ?>

<div id="wrap_text_commander">
    <div class="commander">
        <h2>3 pizzas achetées = 1 OFFERTE* </h2>
    </div>
    <h2 class="titre_commander_pizza">pizzas</h2>
</div>
<div id="wrap_pizza_commander">
    <div class="pizza_form" data-id="45">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_one'][0] ?></h2>
            <p><?= $metas['prix_pizza_one'][0] ?></p>
        </div>
        <div class="image_content_pizza">
            <p class="pizza_corps"><?= $metas['content_pizza_one'][0] ?></p>
            <p><?= getImageAttachment(94 ,'imgpiz','test')?></p>
        </div>
    </div>

    <div class="pizza_form">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_two'][0] ?></h2>
            <p><?= $metas['prix_pizza_two'][0] ?></p>
        </div>
        <div class="image_content_pizza"> 
            <p class="pizza_corps"><?= $metas['content_pizza_two'][0] ?></p>
            <p><?=  getImageAttachment(113 ,'imgpiz','test')?></p>
        </div>

    </div> <div class="pizza_form">
    <div class="pizza_titre_prix">
        <h2><?= $metas['titre_pizza_three'][0] ?></h2>
        <p><?= $metas['prix_pizza_three'][0] ?></p>
    </div>
    <div class="image_content_pizza">
        <p class="pizza_corps"><?= $metas['content_pizza_three'][0] ?></p>
        <p><?=  getImageAttachment(115 ,'imgpiz','test')?></p>
    </div>
</div>

    <div class="pizza_form">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_four'][0] ?></h2>
            <p><?= $metas['prix_pizza_four'][0] ?></p>
        </div>
        <div class="image_content_pizza">
            <p class="pizza_corps"><?= $metas['content_pizza_four'][0] ?></p>
            <p><?=getImageAttachment(122 ,'imgpiz','test')?></p>
        </div>
    </div>

    <div class="pizza_form">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_five'][0] ?></h2>
            <p><?= $metas['prix_pizza_five'][0] ?></p>
        </div>
        <div class="image_content_pizza">
            <p class="pizza_corps"><?= $metas['content_pizza_five'][0] ?></p>
            <p><?= getImageAttachment(128 ,'imgpiz','test') ?></p>
        </div>
    </div>

    <div class="pizza_form">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_six'][0] ?></h2>
            <p><?= $metas['prix_pizza_six'][0] ?></p>
        </div>
        <div class="image_content_pizza">
            <p class="pizza_corps"><?= $metas['content_pizza_six'][0] ?></p>
            <p><?= getImageAttachment(113 ,'imgpiz','test') ?></p>
        </div>
    </div>

    <div class="pizza_form">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_seven'][0] ?></h2>
            <p><?= $metas['prix_pizza_seven'][0] ?></p>
        </div>
        <div class="image_content_pizza">
            <p class="pizza_corps"><?= $metas['content_pizza_seven'][0] ?></p>
            <p><?=  getImageAttachment(122 ,'imgpiz','test')?></p>
        </div>
    </div>

    <div class="pizza_form">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_huit'][0] ?></h2>
            <p><?= $metas['prix_pizza_huit'][0] ?></p>
        </div>
        <div class="image_content_pizza">
            <p class="pizza_corps"><?= $metas['content_pizza_huit'][0] ?></p>
            <p><?=  getImageAttachment(128 ,'imgpiz','test')?></p>
        </div>
    </div>

    <div class="pizza_form">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_neuf'][0] ?></h2>
            <p><?= $metas['prix_pizza_neuf'][0] ?></p>
        </div>
        <div class="image_content_pizza">
            <p class="pizza_corps"><?= $metas['content_pizza_neuf'][0] ?></p>
            <p><?= getImageAttachment(115 ,'imgpiz','test')?></p>
        </div>
    </div>

    <div class="pizza_form">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_ten'][0] ?></h2>
            <p><?= $metas['prix_pizza_ten'][0] ?></p>
        </div>
        <div class="image_content_pizza">
            <p class="pizza_corps"><?= $metas['content_pizza_ten'][0] ?></p>
            <p><?=  getImageAttachment(113 ,'imgpiz','test') ?></p>
        </div>
    </div>

    <div class="pizza_form">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_eleven'][0] ?></h2>
            <p><?= $metas['prix_pizza_eleven'][0] ?></p>
        </div>
        <div class="image_content_pizza">
            <p class="pizza_corps"><?= $metas['content_pizza_eleven'][0] ?></p>
            <p><?= getImageAttachment(122 ,'imgpiz','test') ?></p>
        </div>
    </div>

    <div class="pizza_form">
        <div class="pizza_titre_prix">
            <h2><?= $metas['titre_pizza_twelve'][0] ?></h2>
            <p><?= $metas['prix_pizza_twelve'][0] ?></p>
        </div>
        <div class="image_content_pizza">
            <p class="pizza_corps"><?= $metas['content_pizza_twelve'][0] ?></p>
            <p><?= getImageAttachment(128 ,'imgpiz','test') ?></p>
        </div>
    </div>
</div>



<div id="pop_up">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ipsum error itaque eligendi. Minima, nihil. Quae reprehenderit nam ipsa delectus doloremque. Quasi excepturi dolor, tenetur quis iure, voluptatem laboriosam facilis saepe omnis mollitia officiis, quos error aspernatur eius harum natus.</p>
</div>
<div class="modal-content" id="popup-45">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>
<?php debug($metas)?>
<?php get_footer(); ?>