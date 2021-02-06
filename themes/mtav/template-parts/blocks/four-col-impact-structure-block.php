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

<?php
/**
 * The Impact template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

?>

<div class="the-impact--wrapper has-separator">
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
            <?php endif;?>
        </div>

        <div class="separator"></div>

        <!-- Structure One -->
        <div class="impact-structure--one">
        <?php foreach ($four_col_data as $data) {
            $title = $data['title'];
            $description = $data['description'];
            ?>
            <div class="imapact-content">

            <?php if($title && !empty($title)) :?>
                <h1 class="imapact-content--title">
                    <?php echo wp_kses_post(MTAV_Remove_ptag($title));?>
                </h1>
            <?php endif; ?>

            <?php if($description && !empty($description)) :?>
                <div class="imapact-content--para">
                    <?php echo wp_kses_post(MTAV_Remove_ptag($description));?>
                </div>
            <?php endif;?>

            </div>
        <?php }?>

        </div>

    </div>
</div>
<div class="optional-separator">
    <div class="container">
        <div class="separator"></div>
    </div>
</div>


