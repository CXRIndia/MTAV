<div class="staff-compo">
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

            <h1 class="title">Staff</h1>
        </div>

        <div class="staff-wrapper">
            <?php
            for ($x = 0; $x <=9 ; $x++) { ?>
                <div class="single-block">
                    <div>
                        <div class="staff-member">
                            <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/png/staff-img.jpg" alt="">
                        </div>

                        <h3 class="name">
                            ALESHIA OCASIO
                        </h3>
                        <p class="job-title">
                            Job Title
                        </p>
                    </div>
                </div>
            <?php }
            ?>

        </div>
    </div>
</div>
