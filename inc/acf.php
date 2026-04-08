<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group([
    'key' => 'group_home',
    'title' => 'Homepage',
    'fields' => [

        // Hero Title
        [
            'key' => 'field_hero_title',
            'label' => 'Hero Title',
            'name' => 'hero_title',
            'type' => 'text',
            'default_value' => 'We’ve got your morning covered with',
        ],

        // Hero  subtitle
        [
          'key' => 'field_hero_subtitle',
            'label' => 'Hero Subtitle',
            'name' => 'hero_subtitle',
            'type' => 'text',
            'default_value' => 'Coffee',
        ],

        // Hero Text
        [
            'key' => 'field_hero_text',
            'label' => 'Hero Text',
            'name' => 'hero_text',
            'type' => 'textarea',
            'default_value' => 'It is best to start your day with a cup of coffee. Discover the
best flavours coffee you will ever have. We provide the best
for our customers.',
            'rows' => 3,
        ],

        // Products Repeater
        [
            'key' => 'field_products',
            'label' => 'Products',
            'name' => 'products',
            'type' => 'repeater',
            'instructions' => 'Add your coffee products',
            'min' => 0,
            'max' => 10,
            'layout' => 'block',
            'button_label' => 'Add Product',
            'sub_fields' => [
                [
                    'key' => 'field_product_title',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_product_price',
                    'label' => 'Price',
                    'name' => 'price',
                    'type' => 'text',
                    'default_value' => '$0.00',
                ],
                [
                    'key' => 'field_product_image',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                ],
            ],
        ],
    ],
    'location' => [
        [
            [
                'param' => 'page_type',
                'operator' => '==',
                'value' => 'front_page',
            ],
        ],
    ],
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'top',
]);

endif;