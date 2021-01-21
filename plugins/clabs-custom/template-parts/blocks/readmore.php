<?php
/**
 * The template part for the Product block.
 *
 * @param array $attributes The block attributes.
 * @param string $content The inner blocks.
 *
 * @package Clabs
 */

namespace Clabs;

?>
<div class="block-product__cta-wrapper block-read-more">
    <button type="button" class="block-read-more-button" id="read-more-btn">
    <?php
    if (empty($attributes ['ctaText']) ) {
        echo 'Read More';
    } else {
        echo wp_kses_post($attributes ['ctaText']);
    }
    ?>
    </button>
</div>
<div class="block-hidden"></div>

