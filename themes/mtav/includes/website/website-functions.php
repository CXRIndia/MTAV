<?php
/**
 * Frontend website functions
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

/**
 * Common Function File Include
 */
foreach ( glob(THEMEPATH . '/includes/website/common/*.php') as $filename ) {
    include $filename;
}

if (class_exists('acf') ) {

    // ACF Theme options includes
    include_once THEMEPATH . '/includes/website/acf-settings/acf-theme-options.php';

    // ACF fields include
    include_once THEMEPATH . '/includes/website/acf-settings/acf-group-functions.php';

}
