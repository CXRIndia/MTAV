<?php
/**
 * Custom footer settings
 * php version 7.4
 *
 * @category MTAV
 * @package  MTAV
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     MTAV
 */

acf_add_local_field_group(
    array(
    'key' => 'group_60112d3c06687',
    'title' => 'Footer Settings',
    'fields' => array(
        array(
            'key' => 'field_60112d4a9beb9',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 'Stay Connected',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_601151acf99cc',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 'Nunc malesuada turpis at est semper condimen. Donec ut arcu quis neque placerat accumsan curabitur faucibus blandit tincidun.',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array(
            'key' => 'field_601151d3f99cd',
            'label' => 'Contact Form Shortcode',
            'name' => 'contact_form',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '[contact-form-7 id="24" title="Stay Connected"]',
            'placeholder' => 'Add contact form short code',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_6011535bf99ce',
            'label' => 'Add Note',
            'name' => 'add_note',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '* By submitting your cell phone number you agree to receive periodic text messages from More Than A Vote. Message and data rates may apply. Text STOP to quit.',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array(
            'key' => 'field_601162e6bae44',
            'label' => 'Copyright Text',
            'name' => 'copyright_text',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '2020 More Than A Vote®',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_60124e99cee9d',
            'label' => 'Facebook Link',
            'name' => 'facebook_link',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 'https://www.facebook.com/MoreThanAVote/',
            'placeholder' => '',
        ),
        array(
            'key' => 'field_60124eb5cee9e',
            'label' => 'Twitter Link',
            'name' => 'twitter_link',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 'https://twitter.com/morethanavote',
            'placeholder' => '',
        ),
        array(
            'key' => 'field_60124ec5cee9f',
            'label' => 'Instagram Link',
            'name' => 'instagram_link',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 'https://bit.ly/mtav-insta',
            'placeholder' => '',
        ),
        array(
            'key' => 'field_60124edaceea0',
            'label' => 'YouTube Link',
            'name' => 'youtube_link',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 'https://www.youtube.com/MoreThanAVote',
            'placeholder' => '',
        ),
        array(
            'key' => 'field_601958e3599ef',
            'label' => 'Tiktok Link',
            'name' => 'tiktok_link',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 'https://www.tiktok.com/@morethanavote',
            'placeholder' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-footer',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    )
);



