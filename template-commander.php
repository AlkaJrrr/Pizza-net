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

    <div class="pizza_form" data-id="46">
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


<!-- The Modal -->
<div id="pop_up-45" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close"  data-id="45">&times;</span>
        <div class="image_content_pizza_modal_one">
            <img class=".image_content_pizza_modal_one" src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
        </div>
        <div class="pizza_titre_prix_modal_one">
            <div class="pizza_personne">
                <h2><?= $metas['titre_pizza_one'][0] ?></h2>
                <p><?= $metas['nombre_perso_pop_up'][0] ?> </p>
                <p><?= $metas['prix_pizza_one'][0] ?></p>
            </div>
            <p class="pizza_corps_popup"><?= $metas['content_pizza_twelve'][0] ?></p>

        </div>

        <div class="sup_plus">
            <span class="supplement"><?= $metas['supplement_pop_up'][0] ?></span><span class="plus">+</span>
        </div>
        <div class="ajout_p_m">
            <p class="moins_ajout">-</p> <p class="two_popup" id="compteur">0</p> <p class="plus_ajout" onclick="ajoutPlus()">+</p>
        </div>
        <div class="button_ajout">
            <button class="panier_popup"><a href="">Ajouter au panier  <span>24,50€</span></a></button> <button class="annule_popup"><a href="">Annuler</a></button>
        </div>
    </div>
</div>


<?php debug($metas)?>
<?php get_footer(); ?>