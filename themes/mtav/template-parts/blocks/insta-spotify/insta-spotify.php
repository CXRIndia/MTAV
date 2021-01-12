<?php
/**
 * Dropbox Instagram Spority block template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>
<section class="spotify">
    <div class="lhs">
        <?php echo do_shortcode($instagram["shortcode"]); ?>
    </div>
    <div class="rhs">
        <iframe class="lazyload"
            data-src="<?php echo esc_attr($spotify['spotify_url']) ?>"
            width="100%" height="100%"
            frameborder="0" allowtransparency="true"
            allow="encrypted-media">
        </iframe>
    </div>
</section>
