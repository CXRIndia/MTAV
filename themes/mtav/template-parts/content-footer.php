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
$tiktok_url    = get_field('tiktok_link', 'options');
?>

<footer>
    <div class="top-footer" id="footer-form">
        <div class="container">
            <div class="stay-connect-wrapper">

                <div class="heading-compo">
                    <div class="line-block">
                        <div class="left-block">
                            <span></span>
                            <span></span>
                            <img class="lazyload"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/title-icon-wh.svg" alt="">
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
                            <p class="content" id="contact_hide">
                            <?php echo wp_kses_post(MTAV_Remove_ptag($description)); ?>
                            </p>
                            <p class="content" id="contact_form_msg">
                            </p>
                        <?php endif; ?>
                    </div>

                    <div class="form-wrapper">
                        <!-- <div class="main-form">
                            <div class="form-group">
                                <label class="lbl-title">First Name</label>
                                <input type="text" name="contact-name" id="js-contact-name" value="" >
                                <span class="error" id="js-invalid-contact-name" ></span>
                            </div>
                            <div class="form-group">
                                <label class="lbl-title">Email</label>
                                <input type="email" name="contact-email" id="js-contact-email" value="" >
                                <span class="error" id="js-invalid-contact-email"></span>
                            </div>
                            <div class="form-group">
                                <label class="lbl-title">Mobile Number</label>
                                <input type="text" name="contact-number" maxlength="10" id="js-contact-number" value="" >
                                <span class="error" id="js-invalid-contact-number"></span>
                            </div>
                            <div class="form-group">
                                <label class="lbl-title">Zip Code</label>
                                <input type="text" name="contact-zipcode" maxlength="5" id="js-contact-zipcode" value="" >
                                <span class="error" id="js-invalid-contact-zipcode"></span>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <input type="submit" value="Send" id="js-contact-submit">
                        </div> -->


                        <script src='https://actionnetwork.org/widgets/v3/form/mtav-footer-form?format=js&source=widget'></script>
                        <div id='can-form-area-mtav-footer-form' style='width: 100%'></div>

                    <?php if($note && !empty($note)) :?>
                        <p class="form-content"><?php echo wp_kses_post(MTAV_Remove_ptag($note)); ?></p>
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
                            <a href="<?php echo esc_url($facebook_url);?>" target="_blank">
                                <img class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/fb-icon.svg" alt="facebook">
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if($twitter_url && !empty($twitter_url)) :?>
                        <li>
                            <a href="<?php echo esc_url($twitter_url);?>" target="_blank">
                                <img class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/twitter-icon.svg" alt="twitter">
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if($instagram_url && !empty($instagram_url)) :?>
                        <li>
                            <a href="<?php echo esc_url($instagram_url);?>" target="_blank">
                                <img class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/instagram-icon.svg" alt="instagram">
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if($youtube_url && !empty($youtube_url)) :?>
                        <li>
                            <a href="<?php echo esc_url($youtube_url);?>" target="_blank">
                                <img class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/youtube-icon.svg" alt="youtube">
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if($tiktok_url && !empty($tiktok_url)) :?>
                        <li>
                            <a href="<?php echo esc_url($tiktok_url);?>" target="_blank">
                                <img class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/ticktok-icon.svg" alt="youtube">
                            </a>
                        </li>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>
