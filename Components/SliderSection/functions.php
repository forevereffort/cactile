<?php

namespace Flynt\Components\SliderSection;

use Flynt\Utils\Asset;

add_filter('Flynt/addComponentData?name=SliderSection', function ($data) {
    $data['buttons'] = [
        'prev' => Asset::requireUrl('Components/SliderSection/Assets/arrow_left.svg'),
        'next' => Asset::requireUrl('Components/SliderSection/Assets/arrow_right.svg'),
    ];

    return $data;
});


function getACFLayout()
{
    return [
        'name' => 'sliderSection',
        'label' => 'Slider Section',
        'sub_fields' => [
            [
                'label' => 'Section ID',
                'name' => 'section_id',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Images',
                'name' => 'images',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Image',
                'sub_fields' => [
                    [
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => '',
                        'max_size' => 4,
                        'mime_types' => 'gif,jpg,jpeg,png',
                    ],
                ]
            ]
        ]
    ];
}
