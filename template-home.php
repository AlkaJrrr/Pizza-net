<?php

/*Template Name: HomePage
*/
$metas = get_post_meta(get_the_ID());
get_header();
?>


<div class="wrap_intro_pizza">
    <div class="introduction_pizza">
        <h2 >3 pizzas achetées = <strong class="strong">1 offerte</strong></h2>
        <div><p>12,90 tarif unique**</p></div>
    </div>
</div>
<?php $args= array(
    'post_type' => 'diapo',
'posts_per_page' => -1
);
$the_query = new WP_Query($args);
?>
<section id="wrap_slider_pizza">
    <div class="slider_pizza">
        <div class="flexslider">
            <ul class="slides">
                <?php if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<li>';
                echo getImageFeatured(get_the_ID(), 'imgdiapo', get_the_title());
                echo '</li>';
                }
                } ?>
            </ul>
        </div>
    </div>
    <div class="wrap_txt_pizza">
        <div class="text_pizza_slides">
            <h2> Bienvenue </h2>
            <div class="text_pizza_slides_two">
                <p>Commandez vos pizzas artisanales puis selectionnez le point de rendez-vous le plus proche pour retirer votre commande.</p>
                <p class="pizza_vert">Nos pizzas sont préparées et pré-cuite le jour de la livraison.
                    Toute commande pour un retrait le jour même doit être effectuée avant 14h.</p>
                <button class="button_vert_slides">  <a href="<?= path('commander');?>">Je passe ma commande </a> </button>
            </div>
        </div>
    </div>
</section>
<section  id="bloc_four">
    <?php
$args = array(
    'post_type' => 'post', // Articles
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => 4
    );
    $query = new WP_Query($args);
    ?>
    <div class="bloc_four_two"> <?php
    if ( $query->have_posts() ) {
        echo '<div id="articles">';
            while ( $query->have_posts() ) {
            $query->the_post(); ?>
            <div class="article">
                <div class="article_background">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <?php echo getImageFeatured(get_the_ID(),'imgbloc', 'nouveau titre'); ?>
                    </a>
                    <div class="bloc_text_title">
                        <h2 class="article_titre"><?= get_the_title(); ?></h2>
                        <p><?= get_the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
            <?php }} wp_reset_postdata(); ?>
            <?php echo '</div>' ?>
</section>

<section id="bloc_preparation">
    <div class="text_preparation">
        <?php echo '<h2>' . $metas['titre_conseil'][0] . '</h2>'; ?>
        <p><?= $metas['text_conseil'][0] ?> </p>
    </div>
</section>


<div id="pizza_bloc">
    <p class="logo_youtube"><?= $metas['logo'][0] ?> </p>
    <h2 class="pizza_titre"><?= $metas['titre_video'][0] ?> </h2>
    <div class="video_pizza">
        <p class="pizza"><?= $metas['titre_youtube'][0] ?> </p>
    </div>
</div>

<section id="map">
    <div class="carte">
        <p><?= $metas['carte'][0] ?> </p>
        <div>
            <div class="text_map">
                <p class="rouge_logo"><?= $metas['logo_map'][0] ?> </p>
                <h2 class="titre_corp"><?= $metas['titre_corp'][0] ?> </h2>
                <p class="content_corp"><?= $metas['content_corp'][0] ?> </p>
                <button class="relais_button"><a href="<?= path('relais')?> ">Consultez la liste des points relais</a></button>

            </div>

        </div>
    </div>
</section>

<div id="lorem">
    <p class="lorem"><?= $metas['lorem_map'][0] ?> </p>
</div>
<div class="piz_offerte">
    <div class="text_offre">
        <span>*Pizza offerte sans supplément. Tout supplément ajouté vous sera facturé.</span>
        <span>**Prix unitaire par pizza, hors supplément.</span>
    </div>
</div>


<?php get_footer(); ?>
