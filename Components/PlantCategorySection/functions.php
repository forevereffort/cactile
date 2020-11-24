<?php

namespace Flynt\Components\PlantCategorySection;

use Timber;

add_filter('Flynt/addComponentData?name=PlantCategorySection', function ($data) {
    $args = [
        'post_type' => 'plant',
        'tax_query' => [
            [
                'taxonomy' => 'plant-category',
                'field'    => 'term_id',
                'terms'    => $data['category'],
            ]
        ],
        'posts_per_page' => 2,
        'offset' => 0,
    ];
    
    $data['plants'] = Timber::get_posts($args);
    
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'plantCategorySection',
        'label' => 'Plant Category Section',
        'sub_fields' => [
            [
                'label' => 'Section ID',
                'name' => 'section_id',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Row Reverse',
                'name' => 'row_reverse',
                'type' => 'true_false'
            ],
            [
                'label' => 'Category',
                'name' => 'category',
                'type' => 'taxonomy',
                'taxonomy' => 'plant-category',
                'field_type' => 'select',
            ],
            [
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'wrapper' => [
                    'class' => 'autosize',
                ],
            ],
            [
                'label' => 'Link Title',
                'name' => 'link_title',
                'type' => 'text',
                'default_value' => '',
                'wrapper' => [
                    'width' => '50'
                ]
            ],
            [
                'label' => 'Link URL',
                'name' => 'link_url',
                'type' => 'text',
                'default_value' => '',
                'wrapper' => [
                    'width' => '50'
                ]
            ],
        ]
    ];
}
