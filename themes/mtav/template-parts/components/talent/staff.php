<?php
/**
 * Talent player section
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */
$args = array(
    'post_type'  => 'team',
    'order'     => 'ASC',
    'meta_key' => 'staff_order',
    'orderby'   => 'meta_value_num',
    'meta_query' => array(
        array(
            'key'     => 'person_designation',
            'value'   => 'staff',
        ),
    ),
    'fields'   => 'ids',
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

if (!empty($query->posts)) {
    $staff_ids = $query->posts;
} else {
    $staff_ids = [];
}

if(!empty($staff_ids)) :
    ?>

<div class="staff-compo">
    <div class="container">
        <div class="header">
            <div class="heading-compo black">
                <div class="line-block">
                    <div class="left-block">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <h1 class="title">Staff</h1>
        </div>

        <div class="staff-wrapper">
            <?php
            foreach ($staff_ids as $key => $staff_id) {
                $staffName   = get_field('name', $staff_id);
                $staffJobTitle = get_field('job_title', $staff_id);
                $staffImageId = get_field('person_image', $staff_id);
                $staffImageAlt = '';
                $staffImageUrl = '';

                if ($staffImageId && !empty($staffImageId)) {
                    $staffImageArray = wp_get_attachment_image_src($staffImageId, 'full');
                    $staffImageAlt   = MTAV_Get_Image_alt($staffImageId, "mtav banner image");
                    $staffImageUrl   = MTAV_Get_image($staffImageArray);
                }
                ?>
                <div class="single-block">
                    <div>
                        <div class="staff-member">
                            <div class="staff-member-inner">
                                <img class="lazyload" data-aos="zoom-in"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="<?php echo esc_url($staffImageUrl); ?>"
                                alt="<?php echo esc_attr($staffImageAlt); ?>">
                            </div>
                        </div>

                        <h3 class="name">
                            <?php echo esc_attr($staffName); ?>
                        </h3>
                        <p class="job-title">
                            <?php echo esc_attr($staffJobTitle); ?>
                        </p>
                    </div>
                </div>
            <?php }
            ?>

        </div>
    </div>
</div>

    <?php
endif;
