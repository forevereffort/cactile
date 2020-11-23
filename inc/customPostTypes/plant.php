<?php

namespace Flynt\CustomPostTypes;

function registerPlantPostType()
{
    $labels = [
        'name'                  => _x('Plants', 'Plant General Name', 'flynt'),
        'singular_name'         => _x('Plant', 'Plant Singular Name', 'flynt'),
        'menu_name'             => __('Plants', 'flynt'),
        'name_admin_bar'        => __('Plant', 'flynt'),
        'archives'              => __('Plant Archives', 'flynt'),
        'attributes'            => __('Plant Attributes', 'flynt'),
        'parent_item_colon'     => __('Parent Plant:', 'flynt'),
        'all_items'             => __('All Plants', 'flynt'),
        'add_new_item'          => __('Add New Plant', 'flynt'),
        'add_new'               => __('Add Plant', 'flynt'),
        'new_item'              => __('New Plant', 'flynt'),
        'edit_item'             => __('Edit Plant', 'flynt'),
        'update_item'           => __('Update Plant', 'flynt'),
        'view_item'             => __('View Plant', 'flynt'),
        'view_items'            => __('View Plant', 'flynt'),
        'search_items'          => __('Search Plant', 'flynt'),
        'not_found'             => __('Not found', 'flynt'),
        'not_found_in_trash'    => __('Not found in Trash', 'flynt'),
        'featured_image'        => __('Featured Image', 'flynt'),
        'set_featured_image'    => __('Set featured image', 'flynt'),
        'remove_featured_image' => __('Remove featured image', 'flynt'),
        'use_featured_image'    => __('Use as featured image', 'flynt'),
        'insert_into_item'      => __('Insert into Plant', 'flynt'),
        'uploaded_to_this_item' => __('Uploaded to this Plant', 'flynt'),
        'items_list'            => __('Plants list', 'flynt'),
        'Plants_list_navigation' => __('Plants list navigation', 'flynt'),
        'filter_items_list'     => __('Filter Plants list', 'flynt'),
    ];
    $args = [
        'label'                 => __('Plant', 'flynt'),
        'description'           => __('Plant Description', 'flynt'),
        'labels'                => $labels,
        'supports'              => ['title'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-palmtree',
    ];
    register_post_type('plant', $args);
}

add_action('init', '\\Flynt\\CustomPostTypes\\registerPlantPostType');

function set_custom_edit_plant_columns($columns)
{
    return [
        'cb' => $columns['cb'],
        'image' => 'Image',
        'title' => $columns['title'],
        'price' => 'Price',
        'taxonomy-plant-category' => $columns['taxonomy-plant-category'],
        'date' => $columns['date'],
    ];
}

add_filter('manage_plant_posts_columns', '\\Flynt\\CustomPostTypes\\set_custom_edit_plant_columns');

function custom_plant_column($column, $post_id)
{
    if ($column === 'image') {
        $plant_image = get_field('image', $post_id);
        echo '<img src="' . $plant_image->src . '" alt="' . $plant_image->alt . '" style="max-width: 100px;"/>';
    } else if ($column == 'price') {
        echo get_field('price', $post_id);
    }
}

add_action('manage_plant_posts_custom_column', '\\Flynt\\CustomPostTypes\\custom_plant_column', 10, 2);

if (function_exists('acf_add_local_field_group')) :
    acf_add_local_field_group(array(
        'key' => 'group_5fbc0298ea00c',
        'title' => 'Plant Metabox',
        'fields' => array(
            array(
                'key' => 'field_5fbc02cd669cd',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5fbc0381a5f6e',
                'label' => 'Image Retina',
                'name' => 'image_retina',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5fbc033c669ce',
                'label' => 'Price',
                'name' => 'price',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'plant',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
endif;
