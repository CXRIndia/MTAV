<?php
/**
 * Theme functions
 * php version 7.4

 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */
?>
<?php
$title          = get_field('title', 'options');
$description    = get_field('description', 'options');
$contact_form   = get_field('contact_form', 'options');
$note           = get_field('add_note', 'options');
$copyright_text = get_field('copyright_text', 'options');
$facebook_url   = get_field('facebook_link', 'options');
$twitter_url    = get_field('twitter_link', 'options');
$instagram_url  = get_field('instagram_link', 'options');
$youtube_url    = get_field('youtube_link', 'options');
?>

<footer>
    <div class="top-footer">
        <div class="container">
            <div class="stay-connect-wrapper">

                <div class="heading-compo">
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

                <div class="stay-connect-block">
                    <div class="content-block">
                    <?php if($title && !empty($title)) :?>
                        <h1 class="title">
                            <?php echo wp_kses_post($title); ?>
                        </h1>
                    <?php endif; ?>
                    <?php if($description && !empty($description)) :?>
                        <p class="content">
                        <?php echo wp_kses_post(MTAV_Remove_ptag($description)); ?>
                        </p>
                    <?php endif; ?>
                    </div>

                    <?php if($contact_form && !empty($contact_form)) :?>
                    <div class="form-wrapper">
                        <?php echo do_shortcode($contact_form);?>
                    <?php endif; ?>
                    <?php if($note && !empty($note)) :?>
                        <?php echo wp_kses_post(MTAV_Remove_ptag($note)); ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="container">
            <div class="page-footer">
                <div class="copy-right">
                    <?php if($copyright_text && !empty($copyright_text)) : ?>
                        <p><?php echo wp_kses_post($copyright_text); ?></p>
                    <?php endif; ?>
                    <?php $args=array(
                    'theme_location' => 'footer',
                    'menu'           => 'footer-menu',
                    'container'      => false ,
                    'items_wrap'     => '<ul id="%1$s">%3$s</ul>',

                    );
                    wp_nav_menu($args); ?>
                    <!-- <div class="terms-privacy">
                        <a href="javascripd:void(0)">Jobs</a>
                        <a href="javascripd:void(0)">Terms of Service</a>
                        <a href="javascripd:void(0)">Privacy Policy</a>
                    </div> -->
                </div>
                <div class="social-menu">
                    <ul>
                    <?php if($facebook_url && !empty($facebook_url)) :?>
                        <li>
                            <a href="<?php echo esc_url($facebook_url);?>">
                                <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/fb-icon.svg" alt="facebook">
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if($twitter_url && !empty($twitter_url)) :?>
                        <li>
                            <a href="<?php echo esc_url($twitter_url);?>">
                                <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/twitter-icon.svg" alt="twitter">
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if($instagram_url && !empty($instagram_url)) :?>
                        <li>
                            <a href="<?php echo esc_url($instagram_url);?>">
                                <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/instagram-icon.svg" alt="instagram">
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if($youtube_url && !empty($youtube_url)) :?>
                        <li>
                            <a href="<?php echo esc_url($youtube_url);?>">
                                <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/youtube-icon.svg" alt="youtube">
                            </a>
                        </li>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
