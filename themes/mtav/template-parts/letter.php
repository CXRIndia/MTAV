<?php
/**
 * Letter template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

get_template_part('template-parts/components/banner');
require THEMEPATH . '/html-template/component/letter/letter-content.php';

the_content();
