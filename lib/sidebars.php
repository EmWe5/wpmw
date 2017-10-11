<?php
function wpmw_register_sidebars()
{
    register_sidebar(array(
        'name'          => 'Gallerie Sidebar',
        'id'            => 'gallery-sidebar',
        'class'         => 'widget',
        'description'   => 'Sidebar auf der Galerieseite',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'wpmw_register_sidebars');