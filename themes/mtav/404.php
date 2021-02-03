<?php
/**
 * The 404 page template file
 * php version 7.4

 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

MTAV_Page_Entry_top('error404-page header-position');
?>

<div class="body-content">
    <div class="content-div">
        <div class="container">
            <div class="heading-compo black">
                <div class="line-block">
                    <div class="left-block">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <h1 class="main-title">
                NOT FOUND
            </h1>
            <p class="content">
                You just hit a route that doesn't exist... the sadness.
            </p>
        </div>
    </div>
</div>

<?php MTAV_Page_Entry_bottom();
