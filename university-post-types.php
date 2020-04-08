<?php

function university_post_types()
{
  register_post_type('campus', [
    'capability_type' => 'campus',
    'map_meta_cap' => true,
    'supports' => ['title', 'editor', 'excerpt'],
    'rewrite' => ['slug' => 'campuses'],
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-location-alt',
    'labels' => [
      'name' => 'Campuses',
      'add_new_item' => 'Add New Campus',
      'edit_item' => 'Edit Campus',
      'all_items' => 'All Campuses',
      'singular_name' => 'Campus'
    ]
  ]);
  register_post_type('event', [
    'capability_type' => 'event',
    'map_meta_cap' => true,
    'supports' => ['title', 'editor', 'excerpt'],
    'rewrite' => ['slug' => 'events'],
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-calendar',
    'labels' => [
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ]
  ]);
  register_post_type('program', [
    'supports' => ['title'],
    'rewrite' => ['slug' => 'programs'],
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-awards',
    'labels' => [
      'name' => 'Programs',
      'add_new_item' => 'Add New Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program'
    ]
  ]);
  register_post_type('professor', [
    'show_in_rest' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
    'public' => true,
    'menu_icon' => 'dashicons-welcome-learn-more',
    'labels' => [
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professors',
      'singular_name' => 'Professor'
    ]
  ]);
}

add_action('init', 'university_post_types');
