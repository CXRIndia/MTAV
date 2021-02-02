<?php
/**
 * Admin Functions
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

foreach ( glob(THEMEPATH . '/includes/admin/post-types/*.php') as $filename ) {
    include $filename;
}
