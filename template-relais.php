
<?php

/* Template Name: relais
*/


$metas = get_post_meta(get_the_ID());
get_header();
?>

<section id="map">
<div class="carte">
<p><?= $metas['map_relais'][0] ?> </p> 
<div>
    <div class="text_map">
<p class="rouge_logo"><?= $metas['logo_relais'][0] ?> </p> 
<h1 class="titre_corp"><?= $metas['titre_relais'][0] ?> </h1> 
<p class="content_corp"><?= $metas['champs_relais'][0] ?> </p> 
</div>
</div>
</div>
</section>
<?php get_footer(); ?>