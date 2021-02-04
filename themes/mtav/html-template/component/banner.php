<?php
/**
 * Dropbox Banner block template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>
<script>
                jQuery( document ).ready(function() {
                if (screen.width > 767) {
                        document.getElementById("bannerImage").style.backgroundImage = "url('<?php echo  esc_url(THEMEURI); ?>/assets/images/png/whoweare-banner.png')";
                } else{
                        document.getElementById("bannerImage").style.backgroundImage = "url('url('<?php echo  esc_url(THEMEURI); ?>/assets/images/png/whoweare-banner-mobile.png')')";
                }
                });
        </script>
<div id = "bannerImage" class="banner">
    <div class="inner-wrapper">
        <div class="container">
            <div class="heading-compo">
                <!-- <h5 class="title">
                Who We Are
                </h5> -->
                <div class="line-block">
                    <div class="left-block">
                        <span></span>
                        <span></span>
                        <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/title-icon-wh.svg" alt="">
                    </div>
                    <div class="right-block">
                        <span></span>
                    </div>
                </div>
            </div>
            <h1 class="brand-white">AN OPEN LETTER TO OUR FANS OF EVERY AGE, RACE AND GENDER</h1>
            <p>Converting Sports Arenas into Voting Locations</p>
            <button class="btn btn-primary">Meet the Team</button>
        </div>
    </div>
</div>

