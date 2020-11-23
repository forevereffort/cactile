<?php

namespace Flynt\Components\SiteFooter;

use Timber;
use Flynt\Utils\Asset;
use Flynt\Utils\Options;

add_action('init', function () {
    register_nav_menus([
        'footer_menu' => __('Footer Menu', 'flynt'),
    ]);
});

add_filter('Flynt/addComponentData?name=SiteFooter', function ($data) {
    $data['menu'] = new Timber\Menu('footer_menu');
    $data['logo'] = [
        'src' => Asset::requireUrl('Components/SiteFooter/Assets/footer-logo.svg'),
        'alt' => get_bloginfo('name')
    ];

    $data['socials'] = [
        [
            'src' => Asset::requireUrl('Components/SiteFooter/Assets/social_facebook.svg'),
            'alt' => 'facebook',
            'link' => 'facebook',
        ],
        [
            'src' => Asset::requireUrl('Components/SiteFooter/Assets/social_instagram.svg'),
            'alt' => 'instagram',
            'link' => 'instagram',
        ],
        [
            'src' => Asset::requireUrl('Components/SiteFooter/Assets/social_amazon.svg'),
            'alt' => 'amazone',
            'link' => 'amazone',
        ],
        [
            'src' => Asset::requireUrl('Components/SiteFooter/Assets/social_pinterest.svg'),
            'alt' => 'pinterest',
            'link' => 'pinterest',
        ]
    ];

    return $data;
});
