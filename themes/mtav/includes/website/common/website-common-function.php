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
 * Get header html
 *
 * @param string $classname class name.
 *
 * @return $classname div with classname
 */
function MTAV_Page_Entry_top($classname)
{
    get_header();
    echo "<div class=\"common-page $classname\">\n"; // phpcs:ignore
    get_template_part('template-parts/content-header');
}

/**
 * Get footer html
 *
 * @return $div bottom page div
 */
function MTAV_Page_Entry_bottom()
{
    get_template_part('template-parts/content-footer');
    echo "</div>\n";
    get_footer();
}


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
 * Function to create the image with crop points
 *
 * @param array $image Image array.
 * @param int   $width Image size to return.
 * @param array $ratio Image ratio to return.
 *
 * @return string Return the image URL.
 */
function MTAV_Get_image( $image, $width = null, $ratio = null )
{

    if ($image && ! empty($image) && ! empty($image[0]) ) {

        $url = $image[0];

        $dimention = null;

        if ($image[1] > $image[2] ) {
            $dimention = $image[2];
        } else {
            $dimention = $image[1];
        }

        if (! empty($width) && ! empty($ratio) ) {

            $height = ( $dimention * $ratio[1] ) / $ratio[0];

            $params = array(
            'crop' => '0,0,' . (int) $dimention . 'px,' . (int) $height . 'px',
            'w'    => $width . 'px',
            );

            $url .= '?' . build_query($params);
        } elseif (! empty($width) ) {

            $params = array(
            'w' => $width . 'px',
            );

            $url .= '?' . build_query($params);
        }

        return $url;
    } else {
        return '';
    }
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
 * MTAV remove p tag from content
 *
 * @param string $content post content.
 *
 * @return string $content
 */
function MTAV_Remove_ptag($content)
{
    $content = str_ireplace('<p>', '', $content);
    $content = str_ireplace('</p>', '', $content);
    return $content;
}

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

/**
 * Function used to show block HTML in backend
 *
 * @param $blockName string
 *
 * @return void
 */
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

/**
 * Function used to create block category
 *
 * @param $categories $array
 * @param $post       post type
 *
 * @return void
 */
function MTAV_Block_categories( $categories, $post )
{
    $temp = array(
        'slug'  => 'mtav',
        'title' => __('MTAV category', 'mtav'),
        'icon'  => 'wordpress',
    );

    $newCategories    = array();
    $newCategories[0] = $temp;

    foreach ($categories as $category) {
        $newCategories[] = $category;
    }

    return $newCategories;
}
add_filter('block_categories', 'MTAV_Block_categories', 10, 2);

/**
 * Function used to remove slug
 *
 * @param $post_link $array
 * @param $post      object
 *
 * @return void
 */
function MTAV_Remove_slug( $post_link, $post )
{
    if ('team' === $post->post_type && 'publish' === $post->post_status ) {
        $post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);
    }
    return $post_link;
}
add_filter('post_type_link', 'MTAV_Remove_slug', 10, 3);

/**
 * Function used to parse request.
 *
 * @param $query object
 *
 * @return void
 */
function MTAV_Parse_request( $query )
{
    if (! $query->is_main_query()
        || 2 != count($query->query)
        || ! isset($query->query['page'])
    ) {
        return;
    }
    if (! empty($query->query['name']) ) {
        $query->set('post_type', array( 'post', 'team', 'page' ));
    }
}
add_action('pre_get_posts', 'MTAV_Parse_request');

add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Function to remove Yoast plugin setting from custom post type
 *
 * @return void.
 */
function MTAV_Remove_Yoast_Metabox_reservations()
{
    remove_meta_box('wpseo_meta', 'team', 'normal');
    remove_meta_box('wpseo_meta', 'mtav-media', 'normal');
}
add_action('add_meta_boxes', 'MTAV_Remove_Yoast_Metabox_reservations', 11);

/**
 * Function used to get video ID.
 *
 * @param $url video url
 *
 * @return $url  embed video url
 */
function MTAV_Get_Youtube_Video_url( $url )
{
    $video_id      = null;
    $youtube_url_parts = wp_parse_url($url);

    if (! empty($youtube_url_parts['query']) ) {
        $youtube_query_parts = [];
        wp_parse_str($youtube_url_parts['query'], $youtube_query_parts);

        if (! empty($youtube_query_parts['v']) ) {
            $video_id = $youtube_query_parts['v'];
        }
    }

    $youtube_url = 'https://www.youtube.com/embed/'.$video_id;

    return $youtube_url;
}

/**
 * Removed the unnecessary js files.
 *
 * @return void.
 */
function MTAV_Deregister_scripts()
{
    wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'MTAV_Deregister_scripts');
