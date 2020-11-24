<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => 'Page Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\HeroTextBackgroundSection\getACFLayout(),
                    Components\BlockTextImageSection\getACFLayout(),
                    Components\PlantCategorySection\getACFLayout(),
                    Components\SliderSection\getACFLayout(),
                    Components\ContactUsSection\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '=',
                    'value' => 'page'
                ]
            ]
        ]
    ]);
});
