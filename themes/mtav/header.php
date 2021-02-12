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

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>


    <style>

    #can_embed_form_inner h2,
    #can_embed_form_inner h4{
        display: none;
    }
    /* .can_embed #can_embed_form,
    .can_embed #donate_auto_modal {
        background-color: transparent !important;
        color: black !important;
    } */
    /* Change link color */
    .can_embed #can_embed_form a,
    .can_embed #donate_auto_modal a {
        color: white;
    }

    /* Heading colors */
    .can_embed #can_embed_form h1,
    .can_embed #donate_auto_modal h1,
    .can_embed #can_embed_form h2,
    .can_embed #donate_auto_modal h2,
    .can_embed #can_embed_form h3,
    .can_embed #donate_auto_modal h3,
    .can_embed #can_embed_form h4,
    .can_embed #donate_auto_modal h4,
    .can_embed #can_embed_form h5,
    .can_embed #donate_auto_modal h5,
    .can_embed #can_embed_form h6,
    .can_embed #donate_auto_modal h6 {
        color: red !important;
    }

    /* Welcome message background color */
    .can_embed #can_embed_form #action_welcome_message #action_welcome_message_inner,
    .can_embed #donate_auto_modal #action_welcome_message #action_welcome_message_inner {
        background-color: rgba(0,0,0,.10) !important;
        /* This is black @ 10% opacity */
    }

    /* Remove the Action Network Logo */
    .can_embed #logo_wrap {
        display: none !important;
    }

    /* Button Background Color */
    /* .can_embed .can_button,
    .can_embed #can_embed_form input[type="submit"],
    .can_embed #can_embed_form .button,
    .can_embed #donate_auto_modal input[type="submit"],
    .can_embed #donate_auto_modal .button {
        background-color: blue !important;
    } */

    /* Button Background Color on Hover */
    /* .can_embed .can_button:hover,
    .can_embed #can_embed_form input[type="submit"]:hover,
    .can_embed #can_embed_form .button:hover,
    .can_embed #donate_auto_modal input[type="submit"]:hover,
    .can_embed #donate_auto_modal .button:hover {
        /* background-color: green !important; */
    } */

    /* Thank You Page Header Background Color */
    .can_embed #can_embed_form #can_thank_you,
    .can_embed #donate_auto_modal #can_thank_you {
        background-color: lightblue !important;
    }

    /* Thank You Page Header Text Color */
    .can_embed #can_embed_form #can_thank_you,
    .can_embed #donate_auto_modal #can_thank_you,
    .can_embed #can_embed_form #can_thank_you h1,
    .can_embed #donate_auto_modal #can_thank_you h1,
    .can_embed #can_embed_form #can_thank_you h4,
    .can_embed #donate_auto_modal #can_thank_you h4,
    .can_embed #can_embed_form #can_thank_you #action_info .action_info_user,
    .can_embed #donate_auto_modal #can_thank_you #action_info .action_info_user,
    .can_embed #can_embed_form #can_thank_you #action_info .action_info_user a,
    .can_embed #donate_auto_modal #can_thank_you #action_info .action_info_user a {
        color: black !important;
    }

    /* Thank You Page Divider Line */
    .can_embed #can_embed_form #can_thank_you #action_info,
    .can_embed #donate_auto_modal #can_thank_you #action_info {
        border-color: black !important;
    }

    </style>

</head>

<body <?php body_class('transparent-nav'); ?>>
