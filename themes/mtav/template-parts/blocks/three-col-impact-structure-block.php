<?php
/**
 * Three Colum impact structure block template.
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<div class="the-impact--wrapper">
    <div class="container">
        <div>
            <div class="heading-compo black">
                <div class="line-block">
                    <div class="left-block">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <?php if($block_title && !empty($block_title)) :?>
                <h1><?php echo wp_kses_post($block_title);?></h1>
            <?php endif; ?>
        </div>

        <div class="separator"></div>

        <div class="impact-structure--two">
            <div class="imapact-content">

            <?php if($first_col_title && !empty($first_col_title)) :?>
                <h1 class="imapact-content--title">
                    <?php echo wp_kses_post($first_col_title);?>
                </h1>
            <?php endif;?>

            <?php if($first_col_desc && !empty($first_col_desc)) :?>
                <div class="imapact-content--para">
                    <?php echo wp_kses_post(MTAV_Remove_ptag($first_col_desc));?>
                </div>
            <?php endif;?>

            </div>

            <div class="imapact-content">

            <?php if($second_col_title && !empty($second_col_title)) :?>
                <h1 class="imapact-content--title">
                    <?php echo wp_kses_post($second_col_title);?>
                </h1>
            <?php endif;?>

            <?php if($second_col_desc && !empty($second_col_desc)) :?>
                <div class="imapact-content--para">
                    <?php echo wp_kses_post(MTAV_Remove_ptag($second_col_desc));?>
                </div>
            <?php endif;?>

            </div>

            <div class="imapact-content video-featuring">

            <?php if($third_col_title && !empty($third_col_title)) :?>
                <h1 class="imapact-content--title">
                    <?php echo wp_kses_post($third_col_title);?>
                </h1>
            <?php endif;?>

                <div class="imapact-content--two-column">
                    <div class="imapact-content--para">
                        <div>DESUS AND MERO</div>
                        <div>CARLON BUTLER</div>
                        <div>CHARLAMAGNE THE GOD</div>
                        <div>JALEN ROSE</div>
                    </div>
                    <div class="imapact-content--para">
                        <div>DESUS AND MERO</div>
                        <div>JEMELE HILL</div>
                        <div>RENEE MONTGOMERY</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
