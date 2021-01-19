<?php
/**
 * Website common functions
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

/**
 * To ‘ping‘ all the sites that were linked to in your post
 *
 * @return void
 */
function MTAV_Pingback_header()
{
    if (is_singular() && pings_open() ) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'MTAV_Pingback_header');

/**
 * Get MTAV Image source
 *
 * @param int    $attachmentId image ID.
 * @param string $size         size of the image.
 * @param bool   $icon         true or false.
 *
 * @return string $image_src[0] Image URL.
 */
function MTAV_Get_Image_src($attachmentId, $size = 'full', $icon = false)
{
    $image_src = wp_get_attachment_image_src($attachmentId, $size, $icon);
    return $image_src[0];
}

/**
 * Get MTAV Image alt
 *
 * @param int    $attachmentId image ID.
 * @param string $default      default alt name for image.
 *
 * @return string $image_alt Image alt string.
 */
function MTAV_Get_Image_alt($attachmentId, $default = null)
{
    $image_alt = get_post_meta($attachmentId, '_wp_attachment_image_alt', true);
    if ($image_alt == '') {
        $image_alt = $default;
    }
    return $image_alt;
}


/**
 * Add support for svg images.
 *
 * @param array $file_types file types.
 *
 * @return array $file_types
 */
function MTAV_Mime_types($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes);

    return $file_types;
}
add_filter('upload_mimes', 'MTAV_Mime_types');

/**
 * Contact Form 7 Zipcode text validation
 *
 * @param array $result result.
 * @param array $tag    tag.
 *
 * @return object $result.
 */
function MTAV_Zipcode_Validation_filter( $result, $tag )
{

    $tag = new WPCF7_FormTag($tag);

    if ('zipcode' == $tag->name) {
        $zipcode = $_POST['zipcode'];
        if (! is_numeric($zipcode)) {
            $result->invalidate($tag, "Not a valid number");
        }
    }

    return $result;
}
add_filter('wpcf7_validate_text', 'MTAV_Zipcode_Validation_filter', 999, 2);
add_filter('wpcf7_validate_text*', 'MTAV_Zipcode_Validation_filter', 999, 2);


function MTAV_WP_Backend_edit($blockName)
{
    ?>
    <div class="" style="border:2px solid #000">
        <h4 style="text-align:center">
            <u><?php echo $blockName ?></u>
        </h4>
    </div>
    <?php
}
