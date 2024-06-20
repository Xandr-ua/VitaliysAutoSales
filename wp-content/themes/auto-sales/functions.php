<?php

include 'inc/register-scripts.php';
include 'inc/register-styles.php';
include 'inc/acf.php';
include 'inc/custom-type.php';
include 'inc/menu.php';

add_filter( 'show_admin_bar', '__return_false' );

// Allow SVG
// Додавання підтримки SVG MIME типів
function enable_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'enable_svg_upload');

// Виправлення типів файлів для SVG
function custom_fix_svg($data, $file, $filename, $mimes) {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if ($ext === 'svg') {
        $data['type'] = 'image/svg+xml';
        $data['ext'] = 'svg';
    }
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'custom_fix_svg', 10, 4);

// Виправлення стилів для SVG у адмінці
function fix_svg_display() {
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
        </style>';
}
add_action('admin_head', 'fix_svg_display');


//add_filter( 'wpcf7_validate_configuration', '__return_false' );

