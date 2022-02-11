<?php

add_image_size('imgdiapo',769.23, 451, true);
add_image_size('imgbloc',20, 30, true);
add_image_size('imgpiz',129.75, 175.24, true);

function remove_default_img_sizes($sizes)
{
    // ['thumbnail','medium', 'medium_large', 'large', '1536x1536', '2048x2048'];
    unset($sizes['medium']);
    unset($sizes['large']);
    return $sizes;
}

add_filter('intermediate_image_sizes_advanced' ,'remove_default_img_sizes', 10, 1);
