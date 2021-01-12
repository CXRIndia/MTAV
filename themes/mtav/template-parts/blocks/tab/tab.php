<?php
/**
 * Dropbox Instagram Spority block template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

$left_panel1            = $panel1['left_panel'];
$left_panel1_image_id   = $left_panel1['image'];
$left_panel1_image_url  = MTAV_Get_Image_src($left_panel1_image_id);
$left_panel1_image_alt  = MTAV_Get_Image_alt($left_panel1_image_id, 'Panel Image');

$right_panel1                       = $panel1['right_panel'];
$left_panel1_backgrond_image_id     = $right_panel1['background_image'];
$left_panel1_backgrond_image_url    = MTAV_Get_Image_src($left_panel1_backgrond_image_id);


$left_panel2            = $panel2['left_panel'];
$left_panel2_image_id   = $left_panel2['image'];
$left_panel2_image_url  = MTAV_Get_Image_src($left_panel2_image_id);
$left_panel2_image_alt  = MTAV_Get_Image_alt($left_panel2_image_id, 'Panel Image');

$right_panel2                       = $panel2['right_panel'];
$left_panel2_backgrond_image_id     = $right_panel2['background_image'];
$left_panel2_backgrond_image_url    = MTAV_Get_Image_src($left_panel2_backgrond_image_id);


$left_panel3            = $panel3['left_panel'];
$left_panel3_image_id   = $left_panel3['image'];
$left_panel3_image_url  = MTAV_Get_Image_src($left_panel3_image_id);
$left_panel3_image_alt  = MTAV_Get_Image_alt($left_panel3_image_id, 'Panel Image');

$right_panel3                       = $panel3['right_panel'];
$left_panel3_backgrond_image_id     = $right_panel3['background_image'];
$left_panel3_backgrond_image_url    = MTAV_Get_Image_src($left_panel3_backgrond_image_id);
?>


<!-- Tab -->
<!-- 3 links  -->
<section class="inter-links">
    <ul class="links">

        <li class="active panel-link" data-panelId="panel-1">
            <a href="javascript:void(0)">
                <span><?php echo esc_attr($tab1_name) ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="50" viewBox="0 0 44 50">
                    <g fill="none" fill-rule="evenodd">
                        <g fill="#FFF">
                            <g>
                                <path d="M22.209 16.252L6.157 1.003 0.26 6.967 21.943 27.567 43.579 5.687 37.948 0.335z" transform="translate(-218 -1969) translate(218 1969)"/>
                                <path d="M22.209 38.147L6.157 22.898 0.26 28.861 21.943 49.461 43.579 27.582 37.948 22.23z" transform="translate(-218 -1969) translate(218 1969)"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </li>

        <li class="panel-link" data-panelId="panel-2">
            <a href="javascript:void(0)">
                <span><?php echo esc_attr($tab2_name) ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="50" viewBox="0 0 44 50">
                    <g fill="none" fill-rule="evenodd">
                        <g fill="#FFF">
                            <g>
                                <path d="M22.209 16.252L6.157 1.003 0.26 6.967 21.943 27.567 43.579 5.687 37.948 0.335z" transform="translate(-218 -1969) translate(218 1969)"/>
                                <path d="M22.209 38.147L6.157 22.898 0.26 28.861 21.943 49.461 43.579 27.582 37.948 22.23z" transform="translate(-218 -1969) translate(218 1969)"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </li>

        <li class="panel-link" data-panelId="panel-3">
            <a href="javascript:void(0)">
                <span><?php echo esc_attr($tab3_name) ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="50" viewBox="0 0 44 50">
                    <g fill="none" fill-rule="evenodd">
                        <g fill="#FFF">
                            <g>
                                <path d="M22.209 16.252L6.157 1.003 0.26 6.967 21.943 27.567 43.579 5.687 37.948 0.335z" transform="translate(-218 -1969) translate(218 1969)"/>
                                <path d="M22.209 38.147L6.157 22.898 0.26 28.861 21.943 49.461 43.579 27.582 37.948 22.23z" transform="translate(-218 -1969) translate(218 1969)"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </li>

    </ul>
</section>


<!-- Panel 1-->
 <section class="inter-links-details panelContent" id="panel-1">

    <div class="lhs">
        <div class="tumbnail-wrapper">
            <div class="thumbnail">
                <img src="<?php echo esc_url($left_panel1_image_url) ?>" alt="<?php echo esc_attr($left_panel1_image_alt) ?>">
            </div>
        </div>
        <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-white.svg" alt="">
        <h4><?php echo esc_attr($left_panel1['title'])?></h4>
        <p><?php echo esc_attr($left_panel1['subtext'])?></p>
        <a href="<?php echo esc_attr($left_panel1['learn_more_link'])?>">
            <?php echo esc_attr($left_panel1['learn_more_text'])?>
        </a>
    </div>

    <div class="rhs" style="background-image: url(<?php echo esc_url($left_panel1_backgrond_image_url) ?>)">
        <div class="overlay">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-white.svg" alt="">
                <h1><?php echo esc_attr($right_panel1['title'])?></h1>
                <p>
                    <?php echo esc_attr($right_panel1['subtext'])?>
                </p>
                <?php if (! $right_panel1['disable_button']) { ?>
                    <a
                        class="btn blue with-bg"
                        style="background-image: url(<?php echo STYLESHEETURI ?>/assets/images/png/bg-blue-btn.png)"
                        href="<?php echo esc_attr($right_panel1['button_link'])?>"
                        target="_blank">
                        <?php echo esc_attr($right_panel1['button_text'])?>
                    </a>
                <?php } ?>
        </div>
    </div>
</section>


<!-- Panel 2  -->
<section class="inter-links-details panelContent" id="panel-2" style="display:none">

    <div class="lhs">
        <div class="tumbnail-wrapper">
            <div class="thumbnail">
                <img src="<?php echo esc_url($left_panel2_image_url) ?>" alt="<?php echo esc_attr($left_panel2_image_alt) ?>">
            </div>
        </div>
        <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-white.svg" alt="">
        <h4><?php echo esc_attr($left_panel2['title'])?></h4>
        <p><?php echo esc_attr($left_panel2['subtext'])?></p>
        <a href="<?php echo esc_attr($left_panel2['learn_more_link'])?>">
            <?php echo esc_attr($left_panel2['learn_more_text'])?>
        </a>
    </div>

    <div class="rhs" style="background-image: url(<?php echo esc_url($left_panel2_backgrond_image_url) ?>)">
        <div class="overlay">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-white.svg" alt="">
                <h1><?php echo esc_attr($right_panel2['title'])?></h1>
                <p>
                    <?php echo esc_attr($right_panel2['subtext'])?>
                </p>
                <?php if (! $right_panel2['disable_button']) { ?>
                    <a
                        class="btn blue with-bg"
                        style="background-image: url(<?php echo STYLESHEETURI ?>/assets/images/png/bg-blue-btn.png)"
                        href="<?php echo esc_attr($right_panel2['button_link'])?>"
                        target="_blank">
                        <?php echo esc_attr($right_panel2['button_text'])?>
                    </a>
                <?php } ?>
        </div>
    </div>
</section>



<!-- Panel 3  -->
<section class="inter-links-details panelContent" id="panel-3" style="display:none">

    <div class="lhs">
        <div class="tumbnail-wrapper">
            <div class="thumbnail">
                <img src="<?php echo esc_url($left_panel3_image_url) ?>" alt="<?php echo esc_attr($left_panel3_image_alt) ?>">
            </div>
        </div>
        <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-white.svg" alt="">
        <h4><?php echo esc_attr($left_panel3['title'])?></h4>
        <p><?php echo esc_attr($left_panel3['subtext'])?></p>
        <a href="<?php echo esc_attr($left_panel3['learn_more_link'])?>">
            <?php echo esc_attr($left_panel3['learn_more_text'])?>
        </a>
    </div>

    <div class="rhs" style="background-image: url(<?php echo esc_url($left_panel3_backgrond_image_url) ?>)">
        <div class="overlay">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-white.svg" alt="">
                <h1><?php echo esc_attr($right_panel3['title'])?></h1>
                <p>
                    <?php echo esc_attr($right_panel3['subtext'])?>
                </p>
                <?php if (! $right_panel3['disable_button']) { ?>
                    <a
                        class="btn blue with-bg"
                        style="background-image: url(<?php echo STYLESHEETURI ?>/assets/images/png/bg-blue-btn.png)"
                        href="<?php echo esc_attr($right_panel3['button_link'])?>"
                        target="_blank">
                        <?php echo esc_attr($right_panel3['button_text'])?>
                    </a>
                <?php } ?>
        </div>
    </div>
</section>

