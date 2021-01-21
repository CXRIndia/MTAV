<?php
/**
 * Contains functions for working with Gutenberg blocks.
 *
 * @package Clabs
 */

namespace Clabs;

// Multi Product Block.
register_block_type(
    'clabs/readmore',
    [
        'render_callback' => __NAMESPACE__ . '\render_block_readmore',
    ]
);


/**
 * Renders the Multiple Products Block.
 *
 * @param  array  $attributes The attributes for this block.
 * @param  string $content    The inner block content.
 * @return string The content for the block.
 */

function render_block_readmore( $attributes, $content )
{
    ob_start();
    include dirname(__DIR__) . '/template-parts/blocks/readmore.php';
    return ob_get_clean();
}
