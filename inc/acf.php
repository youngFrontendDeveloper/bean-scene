<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group([
    'key' => 'group_home',
    'title' => 'Homepage',
    'fields' => [
        
        // ========== ВКЛАДКА HERO ==========
        [
            'key' => 'tab_hero',
            'label' => 'HERO',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
            'endpoint' => 0,
        ],
        
        // Hero Title
        [
            'key' => 'field_hero_title',
            'label' => 'Hero Title',
            'name' => 'hero_title',
            'type' => 'text',
            'default_value' => 'We\'ve got your morning covered with',
        ],

        // Hero Subtitle
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

        
          // ========== ВКЛАДКА DIFFERENT ==========
          [
            'key' => 'tab_different',
            'label' => 'DIFFERENT',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
            'endpoint' => 0,
        ],
        
        // Different Title
        [
            'key' => 'field_different_title',
            'label' => 'Different Title',
            'name' => 'different_title',
            'type' => 'text',
            'default_value' => 'Why are we different?',
        ],
        
        // Different TOP Text
        [
            'key' => 'field_different_top-text',
            'label' => 'Different Top-Text',
            'name' => 'different_top-text',
            'type' => 'textarea',
            'default_value' => 'We don’t just make your coffee, we make your day!',
            'rows' => 3,
        ],

         // Different Bottom Text
         [
            'key' => 'field_different_bottom-text',
            'label' => 'Different Bottom-Text',
            'name' => 'different_bottom-text',
            'type' => 'textarea',
            'default_value' => 'We don’t just make your coffee, we make your day!',
            'rows' => 3,
        ],

         // Different Slogan
         [
            'key' => 'field_different_slogan',
            'label' => 'Different Slogan',
            'name' => 'different_slogan',
            'type' => 'text',
            'default_value' => 'Get started today',           
        ],

        // ========== КАРТОЧКИ (фиксированные 4 штуки) ==========

// Карточка 1
[
    'key' => 'group_different_card_1',
    'label' => 'Card 1',
    'name' => 'different_card_1',
    'type' => 'group',
    'sub_fields' => [
        [
            'key' => 'field_card_1_image',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
            'instructions' => 'Upload card image',
        ],
        [
            'key' => 'field_card_1_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'default_value' => 'Supreme Beans',
            'placeholder' => 'e.g., Supreme Beans',
        ],
        [
            'key' => 'field_card_1_text',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'default_value' => 'Beans that provides great taste',
            'rows' => 2,            
            'new_lines' => 'br', 
        ],
    ],
],

// Карточка 2
[
    'key' => 'group_different_card_2',
    'label' => 'Card 2',
    'name' => 'different_card_2',
    'type' => 'group',
    'sub_fields' => [
        [
            'key' => 'field_card_2_image',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ],
        [
            'key' => 'field_card_2_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'default_value' => 'High Quality',
        ],
        [
            'key' => 'field_card_2_text',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'default_value' => 'We provide the highest quality',
            'rows' => 2,
            'new_lines' => 'br', 
        ],
    ],
],

// Карточка 3
[
    'key' => 'group_different_card_3',
    'label' => 'Card 3',
    'name' => 'different_card_3',
    'type' => 'group',
    'sub_fields' => [
        [
            'key' => 'field_card_3_image',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ],
        [
            'key' => 'field_card_3_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'default_value' => 'Extraordinary',
        ],
        [
            'key' => 'field_card_3_text',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'default_value' => 'Coffee like you have never tasted',
            'rows' => 2,
            'new_lines' => 'br', 
        ],
    ],
],

// Карточка 4
[
    'key' => 'group_different_card_4',
    'label' => 'Card 4',
    'name' => 'different_card_4',
    'type' => 'group',
    'sub_fields' => [
        [
            'key' => 'field_card_4_image',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
        ],
        [
            'key' => 'field_card_4_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'default_value' => 'Affordable Price',
        ],
        [
            'key' => 'field_card_4_text',
            'label' => 'Text',
            'name' => 'text',
            'type' => 'textarea',
            'default_value' => 'Our Coffee prices are easy to afford',
            'rows' => 2,
            'new_lines' => 'br', 
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