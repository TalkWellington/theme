<?php

function kwtheme_scripts() {
  wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.min.css' );
  wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
  wp_enqueue_script( 'sidemenu_popout', get_template_directory_uri() . '/js/index.js' );
}

add_action( 'wp_enqueue_scripts', 'kwtheme_scripts' );

add_theme_support( 'title-tag' );

// Featured Image (post thumbnail) support
add_theme_support('post-thumbnails');


// change sizes on resp imgs

function adjust_image_sizes_attr( $sizes, $size ) {

$sizes = '(max-width: 800px) 100vw, 800px';

return $sizes;

}

add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );


//Allow SVG upload support

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


// Filter to let us add author's names to posts by adding a custom field "guest-author"

add_filter( 'the_author', 'guest_author_name' );
add_filter( 'get_the_author_display_name', 'guest_author_name' );

function guest_author_name( $name ) {
global $post;

$author = get_post_meta( $post->ID, 'guest-author', true );

if ( $author )
$name = $author;

return $name;
}



//Hero image and logo widgets
if (function_exists('register_sidebar')) {

  register_sidebar(array(
    'name' => 'Head Feature Area',
    'id'   => 'head-feature-area',
    'description'   => 'This is the featured story area on our front page.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name' => 'Secondary Feature',
    'id'   => 'secondary-feature',
    'description'   => 'This is the second, smaller featured story on our front page.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name' => 'Tertiary Feature',
    'id'   => 'tertiary-feature',
    'description'   => 'This is the third, smaller featured story on our front page.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
   register_sidebar(array(
    'name' => 'Logo',
    'id'   => 'logo',
    'description'   => 'This is the logo',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

    register_sidebar(array(
    'name' => 'Links',
    'id'   => 'links-widget-area',
    'description'   => 'This is the area our favourite links go.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));  
}




// Create Custom Global Settings in admin panel 

function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}

function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );

  register_setting('section', 'twitter');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

add_action( 'admin_menu', 'custom_settings_add_menu' ); 


//reply to comments? 

// function wpse52737_enqueue_comment_reply_script() {
//     if ( get_option( 'thread_comments' ) ) {
//         wp_enqueue_script( 'comment_reply' );
//     }
// }
// add_action( 'comment_form_before', 'wpse52737_enqueue_comment_reply_script' );

