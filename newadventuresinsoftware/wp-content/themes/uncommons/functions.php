<?php
if(function_exists('register_sidebar'))
{
    register_sidebar(array('before_widget' => '<li>',
                           'after_widget' => '</li>',
                           'before_title' => '<h2>',
                           'after_title' => '</h2>'));
}

function reduced_excerpt_length($length)
{
    return min(35, $length);
}
add_filter('excerpt_length', 'reduced_excerpt_length');

function excerpt_more_link($more)
{
    global $post;
    return '&#x2026;';
}
add_filter('excerpt_more', 'excerpt_more_link');
?>
