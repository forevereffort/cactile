<?php

namespace Flynt\Components\BlockTextImageSection;

function getACFLayout()
{
    return [
        'name' => 'blockTextImageSection',
        'label' => 'Block Text Image Section',
        'sub_fields' => [
            [
                'label' => 'Section ID',
                'name' => 'section_id',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => '',
                'max_size' => 4,
                'mime_types' => 'gif,jpg,jpeg,png',
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
