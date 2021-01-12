<?php
/**
 * Template Name: Homapage
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */
get_header();
?>
<div class="page-home">
    <!-- hero -->
    <section class="hero" style="background-image: url(<?php echo STYLESHEETURI ?>/assets/images/png/bg-hero.png)">
        <div class="overlay">
            <div class="hero__data">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/logo/logo.png" alt="logo"/>
                <div class="hero__data-description">
                    <p>A weekly lunch “drop” of an exclusive</p>
                    <p>restaurant menu item and recommendations on</p>
                    <p> how to reclaim one of the most important parts of the day: <span>the lunch break.</span></p>
                </div>
            </div>
            <a href="#about" class="icon-down-arrow">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-down.svg" alt="">
            </a>
        </div>
    </section>
    <!-- about -->
    <section id="about" class="about">
        <div class="lhs">
            <div class="lhs__part">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-blue.svg" alt="">
                <h1>About Us</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="lhs__part">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-blue.svg" alt="">
                <h1>Lunchbox</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Morbi tempus iaculis urna id.
                </p>
            </div>
        </div>
        <div class="rhs"></div>
        <picture>
            <source media="(max-width:767px)" srcset="<?php echo STYLESHEETURI ?>/assets/images/home/business-lunch-mob.png">
            <img src="<?php echo STYLESHEETURI ?>/assets/images/home/business-lunch.png" alt="" >
        </picture>
    </section>
    <!-- 3 links  -->
    <section class="inter-links">
        <ul class="links">
            <li class="active">
                <a href="#nyc" id="nyc">
                    <span>nyc</span>
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
            <li>
                <a href="#">
                    <span>chi</span>
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
            <li>
                <a href="#">
                    <span>sf</span>
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
    <!-- NYC  -->
    <section class="inter-links-details">
        <div class="lhs">
            <div class="tumbnail-wrapper">
                <div class="thumbnail">
                    <img src="<?php echo STYLESHEETURI ?>/assets/images/png/thumbnail.png" alt="">
                </div>
            </div>
            <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-white.svg" alt="">
            <h4>NYC Work From Home Guide:</h4>
            <p>19 Unique Outdoor Dining Options in NYC</p>
            <a href="">Learn More</a>
        </div>
        <div class="rhs" style="background-image: url(<?php echo STYLESHEETURI ?>/assets/images/png/bg-nyc.png)">
            <div class="overlay">
                 <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-white.svg" alt="">
                 <h1>NYC Lunch Drop: OTTO’S TACO</h1>
                 <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Morbi tempus iaculis urna id.
                 </p>
                 <button
                    type="button"
                    class="btn blue with-bg"
                    style="background-image: url(<?php echo STYLESHEETURI ?>/assets/images/png/bg-blue-btn.png)">
                    Order Now
                 </button>
            </div>
        </div>
    </section>
    <!-- sweeptakes -->
    <section class="sweeptakes">
        <div class="lhs">
            <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-blue.svg" alt="">
            <h4>Sweepstakes</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut
                enim ad. Ut enim ad minim veniam, quis nostrud ullamco laboris.
            </p>
            <a href="#" class="link" id="enterPopup">Enter to Win</a>
        </div>
        <div class="rhs">
            <div class="thumbnail">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/png/lunch-dropbox.png" alt="">
            </div>
        </div>
    </section>
    <!-- dropbox package -->
    <section class="dropbox-pkg" style="background-image: url(<?php echo STYLESHEETURI ?>/assets/images/png/bg-package.png)">
        <h2>Get Your Dropbox Care Package</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a class="btn blue no-border">Take Me There</a>
    </section>
    <!-- spspotify -->
    <section class="spotify">
        <div class="lhs">
            <iframe src="https://open.spotify.com/embed/playlist/35MoSswdGYVMP9ou2VXOtr" width="100%" height="100%" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div class="rhs">
         <iframe src="https://open.spotify.com/embed/playlist/35MoSswdGYVMP9ou2VXOtr" width="100%" height="100%" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
    </section>
    <!-- footer -->
    <footer class="footer">
        <small>2020 © The MTAV Inc. All Rights Reserved.</small>
        <ul class="social-list">
            <li>
                <a href="">
                    <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-insta.svg" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-spotify.svg" alt="">
                </a>
            </li>
        </ul>
    </footer>
</div>
<!-- contact form -->
<div class="contact-form-wrapper">
    <div class="contact-form">
        <img src="<?php echo STYLESHEETURI ?>/assets/images/png/image-briefcase-popup.png" alt="" class="img-breifcase">
        <div class="contact-form-header">
            <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-arrow-blue.svg" alt="" class="icon-arrow">
            <h1 class="title">Enter the Below Information for a Chance to Win!</h1>
            <button type="button" class="btn-close">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-close-popup.svg" alt="" class="icon-close">
            </button>
        </div>
        <div class="contact-grid-wrapper">
            <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
        </div>
    </div>
</div>
<!-- thank you  -->
<div class="thank-you-wrapper">
    <div class="thank-you">
        <div class="thank-you-header">
            <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-thumbs-up.svg" alt="" class="icon-thumbs-up">
            <h1 class="title"><span>Thank You for Entering!</span><span>We Have Sent You a Confirmation Email, Good Luck!</span></h1>
            <button type="button" class="btn-close">
                <img src="<?php echo STYLESHEETURI ?>/assets/images/icons/svg/icon-close-popup.svg" alt="" class="icon-close">
            </button>
        </div>
        <div class="bottom-patch"></div>
        <img src="<?php echo STYLESHEETURI ?>/assets/images/png/image-briefcase-popup.png" alt="" class="img-breifcase">
    </div>
</div>

<?php
get_footer();
