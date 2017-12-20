<?php

function kwtheme_scripts() {
  wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
  wp_enqueue_script( 'sidemenu_popout', get_template_directory_uri() . '/js/index.js' );
}

add_action( 'wp_enqueue_scripts', 'kwtheme_scripts' );

add_theme_support( 'title-tag' );

// Add Featured Image (post thumbnail) support
add_theme_support('post-thumbnails');


// Change sizes on responsive images

function adjust_image_sizes_attr( $sizes, $size ) {

  $sizes = '(max-width: 800px) 100vw, 800px';

  return $sizes;

}

add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );


//Allow SVG media upload support

function add_file_types_to_uploads($file_types){

  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );

  return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');



// Change default ellipses from "[...]"  to "..." in post excerpts
function wpdocs_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// Filter to let us manually add author's names to posts by adding a custom field "guest-author" on the post menu back end.

add_filter( 'the_author', 'guest_author_name' );
add_filter( 'get_the_author_display_name', 'guest_author_name' );

function guest_author_name( $name ) {
  global $post;

  $author = get_post_meta( $post->ID, 'guest-author', true );

  if ( $author )
    $name = $author;

  return $name;
}



//Widget areas
if (function_exists('register_sidebar')) {

  register_sidebar(array(
    'name' => 'Logo',
    'id'   => 'logo',
    'description'   => 'This is the logo area',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
    ));
    register_sidebar(array(
    'name' => 'social-sharing-widget',
    'id'   => 'social-sharing-widget',
    'description'   => 'This is the social-sharing-widget area',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
    ));

}

add_filter( 'widget_tag_cloud_args', 'change_tag_cloud_font_sizes');
/**
 * Change the Tag Cloud's Font Sizes.
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return array
 */
function change_tag_cloud_font_sizes( array $args ) {
    $args['smallest'] = '14';
    $args['largest'] = '18';

    return $args;
}






