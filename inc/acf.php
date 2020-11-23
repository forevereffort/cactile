<?php

namespace Flynt\Acf;

use Flynt\Utils\Options;

add_filter('pre_http_request', function ($preempt, $args, $url) {
    if (strpos($url, 'https://www.youtube.com/oembed') !== false || strpos($url, 'https://vimeo.com/api/oembed') !== false) {
        $response = wp_cache_get($url, 'oembedCache');
        if (!empty($response)) {
            return $response;
        }
    }
    return false;
}, 10, 3);

add_filter('http_response', function ($response, $args, $url) {
    if (strpos($url, 'https://www.youtube.com/oembed') !== false || strpos($url, 'https://vimeo.com/api/oembed') !== false) {
        wp_cache_set($url, $response, 'oembedCache');
    }
    return $response;
}, 10, 3);

Options::addGlobal('FooterSocialLinks', [
    [
        'label' => 'Footer Facebook',
        'name' => 'footer_facebook',
        'type' => 'text',
        'default_value' => '',
    ],
    [
        'label' => 'Footer Instagram',
        'name' => 'footer_instagram',
        'type' => 'text',
        'default_value' => '',
    ],
    [
        'label' => 'Footer Amazon',
        'name' => 'footer_amazon',
        'type' => 'text',
        'default_value' => '',
    ],
    [
        'label' => 'Footer Pinterest',
        'name' => 'footer_pinterest',
        'type' => 'text',
        'default_value' => '',
    ],
]);
