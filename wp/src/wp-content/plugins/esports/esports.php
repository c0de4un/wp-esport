<?php

/**
 * @package ESports
 * @version 0.1
*/
/*
Plugin Name: ESports
Plugin URI: https://github.com/c0de4un/wp-esport
Description: ESports plugin
Author: Denis Z. (c0de4un)
Version: 0.1
Author URI: https://github.com/c0de4un
Requires PHP: 8.1
*/

if (!function_exists('hello_esports')) {
    function hello_esports()
    {
        $lang   = '';
        if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
            $lang = ' lang="en"';
        }

        printf(
            '<p id="dolly"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
            __( 'Quote from Hello Dolly song, by Jerry Herman:' ),
            $lang,
            "ESports Plugin"
        );
    }
}

add_action( 'admin_notices', 'hello_esports' );
