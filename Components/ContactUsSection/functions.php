<?php

namespace Flynt\Components\ContactUsSection;

function getACFLayout()
{
    return [
        'name' => 'contactUsSection',
        'label' => 'Contact Us Section',
        'sub_fields' => [
            [
                'label' => 'Content',
                'name' => 'content',
                'type' => 'text',
                'default_value' => '',
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
