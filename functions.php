<?php

function kwtheme_scripts() {
	// wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
  wp_enqueue_script( 'sidemenu_popout', get_template_directory_uri() . '/js/index.js' );

	// wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'kwtheme_scripts' );

add_theme_support( 'title-tag' );

function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
// Create Custom Global Settings
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

// Featured Image (post thumbnail) support
add_theme_support('post-thumbnails');


//Hero image widgets
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
    'name' => 'Story Header',
    'id'   => 'story-header',
    'description'   => 'This is the image and title above stories.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}



// function wpb_adding_scripts() {
// wp_register_script('sidemenu_popout', 
//   plugins_url('sidemenu_popout_script.js', __FILE__), 
//   array('jquery'),'1.1', true);
// wp_enqueue_script('my_amazing_script');
// }

// add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  
