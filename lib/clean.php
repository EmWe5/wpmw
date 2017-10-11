<?php
if (!function_exists('remove_jquery_migrate')) {
    // @url: http://www.paulund.co.uk/remove-jquery-migrate-file-wordpress
    function remove_jquery_migrate(&$scripts)
    {
        if (!is_admin()) {
            $scripts->remove('jquery');
        }
    }
}
add_filter('wp_default_scripts', 'remove_jquery_migrate');