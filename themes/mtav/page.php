<?php
/**
 * Page template
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

get_header()
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part('template-parts/content', 'page');
        endwhile;
        ?>

        </main>
    </div>
<?php
get_footer();
