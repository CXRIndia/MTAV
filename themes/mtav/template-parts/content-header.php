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
$logo_id          = get_field('logo_image', 'options');
$logo_image_array = wp_get_attachment_image_src($logo_id, 'full');
$logo_image_alt   = MTAV_Get_Image_alt($logo_id, "logo");
$logo_image_url   = MTAV_Get_image($logo_image_array);
?>
<header>
    <div class="container">
        <div class="header-menu">
        <?php if($logo_image_url && !empty($logo_image_url)) : ?>
            <div class="logo">
                <a href="<?php echo esc_url(home_url()) ?>">
                    <img class="lazyload"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="<?php echo esc_url($logo_image_url); ?>"
                        alt="Logo Image">
                </a>
            </div>
        <?php endif; ?>
        <div class="menu-wrapper">
            <?php $args=array(
                'theme_location' => 'primary',
                'menu'           => 'main-menu',
                'container'      => false ,
                'items_wrap'     => '<ul id="%1$s">%3$s</ul>',

            );
            wp_nav_menu($args); ?>
            <div class="btn-wrapper">
            <?php $args=array(
                    'theme_location' => 'secondary',
                    'menu'           =>'signup-menu',
                    'container'      => false ,
                    'items_wrap'     => '<ul id="%1$s">%3$s</ul>',

                );
                wp_nav_menu($args); ?>
            </div>
        </div>

        <div class="hamburger-wrapper">
            <a href="javascript:void(0)" class="js-menuopen">
                <img class="lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/hamburger-menu-icon.svg" alt="">
            </a>
        </div>


    </div>
</header>

<!-- START : Mobile Menu -->
<div class="mobile-menu">
    <div class="menu-header">
        <div class="logo">
            <a href="<?php echo esc_url($logo_image_url); ?>">
                <img class="lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="<?php echo esc_url($logo_image_url); ?>"
                alt="Logo Image">
            </a>
        </div>
        <a href="javascript:void(0)" class="menu-close js-menuclose">
            <img class="lazyload"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-src="<?php echo esc_url(THEMEURI); ?>/assets/images/icons/menu-close-icon.svg" alt="">
        </a>
    </div>

    <div class="menu-wrapper">
        <?php $args=array(
            'theme_location' => 'primary',
            'menu'           => 'main-menu',
            'container'      => false ,
            'items_wrap'     => '<ul id="%1$s">%3$s</ul>',
        );
                          wp_nav_menu($args); ?>
        <div class="btn-wrapper">
            <?php $args=array(
                'theme_location' => 'secondary',
                'menu'           =>'signup-menu',
                'container'      => false ,
                'items_wrap'     => '<ul id="%1$s">%3$s</ul>',
            );
            wp_nav_menu($args); ?>
        </div>

    </div>
</div>
