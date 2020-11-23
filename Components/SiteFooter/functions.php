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