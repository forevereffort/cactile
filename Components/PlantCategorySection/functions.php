<?php

namespace Flynt\Components\PlantCategorySection;

add_filter('Flynt/addComponentData?name=PlantCategorySection', function ($data) {    
    print_r($data);
    // $args = [
    //     'post_type' => 'plant',
    //     'tax_query' => [
    //         [
    //             'taxonomy' => 'people',
    //             'field'    => 'slug',
    //             'terms'    => 'bob',
    //         ]
    //     ],
    //     'posts_per_page' => 2,
    //     'offset' => 0,
    // ];
    
    // $data['blogs'] = Timber::get_posts($args);
    
    // $pagination = new ZebraPagination();
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'plantCategorySection',
        'label' => 'Plant Category Section',
        'sub_fields' => [
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
