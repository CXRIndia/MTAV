<?php
/**
 * Reusable extensions for the Clabs site.
 *
 * Plugin Name: Clabs Gutenberg
 * Plugin URI: https://cemtrexlabs.com/
 * Description: Extensions to the Clabs site.
 * Version: 1.0.0
 * Author: Cemtrexlabs
 *
 * @package Clabs
 */

namespace Clabs;

// Include functions for working with assets (primarily JavaScript).
require_once __DIR__ . '/inc/assets.php';

// Server-side blocks.
require_once __DIR__ . '/inc/blocks.php';

// Include functions.php for registering custom post types, etc.
require_once __DIR__ . '/functions.php';

