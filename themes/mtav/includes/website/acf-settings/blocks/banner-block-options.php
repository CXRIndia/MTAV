<?php
/**
 * Banner block acf settings
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
    'key' => 'group_5f89691d15972',
    'title' => 'Banner BLock',
    'fields' => array(
        array(
            'key' => 'field_5f896b1febb35',
            'label' => 'Background Image',
            'name' => 'background_image',
            'type' => 'image',
            'instructions' => 'Add banner background image',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
        array(
            'key' => 'field_5f896b96ebb36',
            'label' => 'Block Image',
            'name' => 'block_image',
            'type' => 'image',
            'instructions' => 'Add block image here.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
        ),
        array(
            'key' => 'field_5f896bc9ebb37',
            'label' => 'Content Text',
            'name' => 'content_text',
            'type' => 'wysiwyg',
            'instructions' => 'You can add the content for this banner section here.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'basic',
            'media_upload' => 0,
            'delay' => 0,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/dropbox-banner-block',
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
