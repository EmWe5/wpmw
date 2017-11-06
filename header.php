<!doctype html><!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]--><!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]--><!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]--><!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]--><head>    <meta charset="<?php bloginfo('charset'); ?>">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="HandheldFriendly" content="True">    <meta name="MobileOptimized" content="320">    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"/>    <title><?php wp_title('|', true, 'right'); ?></title>    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400" rel="stylesheet">    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">    <!--[if IE]>    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">    <![endif]-->    <meta name="msapplication-TileColor" content="#f01d4f">    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png">    <meta name="theme-color" content="#121212">    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">    <?php wp_head(); ?></head><body itemscope itemtype="http://schema.org/WebPage"><header id="main-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">    <div class="title-bar" data-responsive-toggle="top-bar-container" data-hide-for="medium">        <div>            <?php            set_query_var( 'logo_size', 'logo-mobile' );            get_template_part( 'template-parts/page/header', 'logo' );            ?>        </div>        <div>            <div class="title-bar-title">MENU</div>            <button class="menu-icon" type="button" data-toggle="top-bar-container"></button>            <a href="https://www.facebook.com/kunstweisbein/" target="_blank">                <img src="<?php bloginfo('template_directory'); ?>/assets/img/facebook-mobile.jpg" alt="facebook">            </a>        </div>    </div>    <div id="top-bar-container" class="top-bar row column">        <div class="top-bar-left hide-for-small-only">            <?php            set_query_var( 'logo_size', 'logo' );            get_template_part( 'template-parts/page/header', 'logo' );            ?>        </div>        <div class="top-bar-right">            <div class="hide-for-small-only social-nav">                <a href="https://www.facebook.com/kunstweisbein/" target="_blank">                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/facebook.jpg" alt="facebook">                </a>            </div>            <nav aria-label="You are here:" role="navigation">                <?php                wp_nav_menu(array(                    'menu_id'        => 'main-nav',                    'menu_class'     => 'vertical medium-horizontal dropdown menu',                    'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',                    'theme_location' => 'main-nav',                    'container'      => false,                    'fallback_cb'    => false,                    'walker'         => new Clean_Walker_Nav()                ));                ?>            </nav>        </div>    </div></header>