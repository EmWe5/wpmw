<?php
/**********************
 * Navigation menues
 **********************/
if (function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'main-nav'    => __('Main Navigation', 'wpmw'),
        'sidebar-nav' => __('Sidebar Navigation', 'wpmw'),
        'footer-nav'  => __('Footer Navigation', 'wpmw')
    ));
}

/********************
 * Main Navigation
 ********************/
if (!function_exists('wpmw_main_navigation')) {
    function wpmw_main_navigation()
    {
        ?>
        <div class="top-bar show-for-small-only">
            <div class="top-bar-left">
                <div class="title-bar" data-responsive-toggle="main-nav" data-hide-for="medium">
                    <button class="menu-icon" type="button" data-toggle="main-nav"></button>
                </div>
            </div>
            <div class="top-bar-left">
                <a id="mobile-logo" href="<?= home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </div>
        </div>


        <?php
        wp_nav_menu(array(
            'menu_id'        => 'main-nav',
            'menu_class'     => 'vertical medium-horizontal dropdown menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>',
            'theme_location' => 'main-nav',
            'container'      => false,
            'fallback_cb'    => false,
            'walker'         => new Clean_Walker_Nav()
        ));
    }
}

/********************
 * Sidebar Navigation
 ********************/
if (!function_exists('wpmw_sidebar_navigation')) {
    function wpmw_sidebar_navigation()
    {
        wp_nav_menu(array(
            'menu_id'        => 'sidebar-nav',
            'menu_class'     => 'menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'theme_location' => 'sidebar-nav',
            'container'      => false,
            'fallback_cb'    => false,
            'walker'         => new Clean_Walker_Nav()
        ));
    }
}

/********************
 * Footer Navigation
 ********************/
if (!function_exists('wpmw_footer_navigation')) {
    function wpmw_footer_navigation()
    {
        wp_nav_menu(array(
            'menu_id'        => 'footer-nav',
            'menu_class'     => 'menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'theme_location' => 'footer-nav',
            'container'      => false,
            'fallback_cb'    => false,
            'walker'         => new Clean_Walker_Nav()
        ));
    }
}