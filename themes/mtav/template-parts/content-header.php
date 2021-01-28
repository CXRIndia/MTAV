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
$logo_image_alt   = MTAV_Get_Image_alt($logo_id, "CXR logo");
$logo_image_url   = MTAV_Get_image($logo_image_array);
?>
<header>
    <div class="container">
        <div class="header-menu">
        <?php if($logo_id && !empty($logo_id)) : ?>
            <div class="logo">
                <a href="javascript:void(0)">
                <img src="<?php echo esc_url($logo_image_url); ?>" alt="Logo Image">
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
            <!-- <div class="menu-wrapper">
                <ul>
                    <li>
                        <a href="javascript:void(0)" class="active">
                            Who We Are
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Campaigns
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            Shop
                        </a>
                    </li>
                </ul>

                <div class="btn-wrapper">
                    <a href="javascript:void(0)" class="btn btn-primary">
                        Sign Up
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</header>
