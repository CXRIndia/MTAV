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
            <?php endif;?>

        </div>

        <div class="separator"></div>

        <div class="impact-structure--three">

        <?php foreach ($four_col_data_with_desc as $data) {
            $title = $data['title'];
            $subhead = $data['subhead'];
            $description = $data['description'];
            ?>

            <div class="imapact-content">

            <?php if($subhead && !empty($subhead)) :?>
                <h6 class="imapact-content--subtitle">
                    <?php echo wp_kses_post($subhead);?>
                </h6>
            <?php endif;?>

                <?php if($title && !empty($title)) :?>
                    <h1 class="imapact-content--title">
                        <?php echo wp_kses_post(MTAV_Remove_ptag($title));?>
                    </h1>
                <?php endif;?>

                <?php if($description && !empty($description)) :?>
                    <div class="imapact-content--para">
                        <?php echo wp_kses_post($description);?>
                    </div>
                <?php endif;?>

            </div>

        <?php }?>

            <!-- <div class="imapact-content">
                <h6 class="imapact-content--subtitle">North Carolina</h6>
                <h1 class="imapact-content--title">Forward<br>Justice</h1>
                <div class="imapact-content--para">
                    <ul>
                        <li>“Know your rights” mailer to 80K universe for voter education - heavily targeting returning citizens</li>
                        <li>Calling, texting low propensity universe-150K of returning citizens (Goal of 15K calls/week) to educate voters about their rights and the re- enfranchisement process</li>
                    </ul>
                </div>
            </div>

            <div class="imapact-content">
                <h6 class="imapact-content--subtitle">Michigan</h6>
                <h1 class="imapact-content--title">Michigan<br>Liberation<br>oraganization</h1>
                <div class="imapact-content--para">
                    <ul>
                        <li>Voter information campaign to a 500K universe </li>
                    </ul>
                </div>
            </div>

            <div class="imapact-content">
                <h6 class="imapact-content--subtitle">Georgia</h6>
                <h1 class="imapact-content--title">Black voters matter</h1>
                <div class="imapact-content--para">
                    <ul>
                        <li>Helped drive record Black turnout in Georgia's historic runoff elections</li>
                        <li>Contacted thousands of Black voters daily through its community caravans, texting and phone banking efforts.</li>
                        <li>"The Blackest Bus In America" organized and mobilized marginalized, predominantly Black communities, providing free groceries for more than 5,000 families and toys for children.</li>
                    </ul>
                </div>
            </div> -->
        </div>

    </div>
</div>
