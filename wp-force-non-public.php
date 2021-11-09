<?php
/**
 * Plugin Name: Force Non-Public
 * Description: Programmatically discourages search engines from indexing the site.
 * Plugin URI: https://github.com/innocode-digital/wp-force-non-public
 * Version: 1.0.0
 * Author: Innocode
 * Author URI: https://innocode.com
 * Tested up to: 5.8.1
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'FORCE_NON_PUBLIC' ) || ! FORCE_NON_PUBLIC ) {
    return;
}

add_action( 'pre_option_blog_public', '__return_zero' );

if ( ! function_exists( 'innocode_force_non_public_notice' ) ) {
    function innocode_force_non_public_notice() {
        global $pagenow;

        if ( ! isset( $pagenow ) || $pagenow != 'options-reading.php' ) {
            return;
        }

        $message = sprintf(
            '<strong>%s</strong> %s',
            __( 'Notice:' ),
            sprintf(
                __( 'It\'s not possible to change <a href="%s">%s</a> setting as current environment is <strong>%s</strong>.', 'innocode-force-non-public' ),
                admin_url( 'options-reading.php#blog_public' ),
                __( 'Search engine visibility' ),
                defined( 'ENVIRONMENT' ) ? ENVIRONMENT : 'staging'
            )
        );

        echo "<div class=\"notice notice-warning\"><p>$message</p></div>";
    }
}

add_action( 'admin_notices', 'innocode_force_non_public_notice' );
