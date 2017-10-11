<?php
/**********************
 * Require Folder lib
 **********************/
if (!function_exists('require_folder')) {
    function require_folder($rel_path)
    {
        $base_path = dirname(__FILE__) . '/' . $rel_path;
        if (!is_dir($base_path)) {
            return;
        }

        foreach (scandir($base_path) as $filename) {
            if ($filename[0] === '.') {
                continue;
            } // Matches '.', '..' and hidden files
            $path = $base_path . '/' . $filename;
            if (is_file($path)) {
                require_once($path);
            }
            if (is_dir($path)) {
                require_folder($rel_path . '/' . $filename);
            }
        }
    }

    /* Be careful - Order might be important */
    require_folder('lib');
}