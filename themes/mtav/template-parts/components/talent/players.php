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
    'meta_key'   => 'person_designation',
    'orderby'    => 'title',
    'order'      => 'ASC',
    'meta_query' => array(
        array(
            'key'     => 'person_designation',
            'value'   => 'player',
        ),
    ),
    'fields'     => 'ids',
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

if (!empty($query->posts)) {
    $players_ids = $query->posts;
} else {
    $players_ids = [];
}


if(!empty($players_ids)) :
    ?>

    <div class="players-compo">
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

                <h1 class="title">ROSTER</h1>
            </div>

            <div class="players-wrapper">
                <?php
                foreach ($players_ids as $key => $player_id) {
                    $playerName   = get_field('name', $player_id);
                    $playerHandle = get_field('instagram_handle', $player_id);
                    $instaLink = 'https://instagram.com/'.$playerHandle;
                    ?>
                    <div class="single-block" data-aos="fade-up">
                        <div>
                            <div class="icon">
                                <img class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/hand-icon.svg" alt="">
                            </div>
                            <div class="content-block">
                                <h3 class="inner-title">
                                    <?php echo esc_attr($playerName) ?>
                                </h3>
                                <a href="<?php echo esc_url($instaLink) ?>"
                                    target="_blank" class="link">
                                    @<?php echo esc_attr($playerHandle) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>

            </div>
        </div>
    </div>

    <?php
endif;
