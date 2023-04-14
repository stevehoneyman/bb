<?php
/* add stylesheet(s)
----------------------------------------------------------------------------- */
function theme_styles()
{
  wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('splide_css', get_template_directory_uri() . '/css/splide.min.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

/* add scripts
----------------------------------------------------------------------------- */
function theme_js()
{
  wp_enqueue_script('scripts_js', get_template_directory_uri() . '/js/scripts.js', '', '', true);
  //wp_enqueue_script('splide_js', get_template_directory_uri() . '/js/splide.min.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'theme_js');

/* setup menus
----------------------------------------------------------------------------- */
function register_theme_menus()
{
  register_nav_menus( // register multiple custom menus
    array(
      'header-menu' => __('Header'),
      'footer-menu' => __('Footer')
    )
  );
}
add_action('init', 'register_theme_menus');

/* enable featured images
----------------------------------------------------------------------------- */
add_theme_support('post-thumbnails');

/* customise image sizes [example below, ]
----------------------------------------------------------------------------- */
add_image_size('custom_example', 480, 360, true);

/* shortcodes
----------------------------------------------------------------------------- */
add_shortcode('Button', 'basic_button');

function basic_button($atts, $content = '')
{
  return '<a class="btn">' . $content . '</a>';
}

/* enable ACF options
----------------------------------------------------------------------------- */
if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}

/* Set basic custom post type & assign taxonomy
----------------------------------------------------------------------------- */
function wpb_caseStudy()
{
  // define & set labels
  $labels = array(
    'name' => 'Case Study', // this is the name that appears in the top LH pf all features or view posts'
    'singular_name' => 'Case Study', // this is the name that appears under new in the top menu along with post, page, media etc
    'add_new' => 'Add Case Study', // this is the add new features in the dashboard menu
    'add_new_item' => 'Add New Case Study', // this is the add new button in the single post type edit screen
    'edit_item' => 'Edit Case Study', // this the edit title on the 'published' post tyoes edit screen
    'new_item' => 'New Case Study Item',
    'all_items' => 'All Case Studies', // this is the all features in the dashboard
    'view_item' => 'View Case Study', // this is the view button in edit feature top menu
    'menu_name' => 'Case Study' // this  is the name that appears in the dashboard beneath comments by default
  );

  // register post type
  register_post_type(
    'wpb_caseStudy', // VIP this controls the slug ie site/features and thus site/features/feature-one
    array(
      'labels' => $labels,
      'capability_type' => 'post',
      'public' => true, // set whether the post type shows in the dashboard [and in menus] or on the site ie externally accessible via url
      'rewrite'  => array('slug' => 'case-studies'), // set my custom slug
      'has_archive' => true,
      'exclude_from_search' => false,
      'supports' => array('title', 'editor', 'excerpt', 'slug', 'thumbnail', 'category'),
      'taxonomies' => array('post_tag', 'category'),
      'menu_position' => 21 // 20 is pages position
    )
  );
}
add_action('init', 'wpb_caseStudy');

/* feature Taxonomy
----------------------------------------------------------------------------- */
function create_caseStudy_taxonomy()
{
  // define & set labels
  $labels = array(
    'name'  =>  'Case Study Taxonomy',
    'singular_name' => 'caseStudy_taxonomy',
    'all_items' => 'Case Study Taxonomy',
    'edit_item' => 'Case Study Taxonomy',
    'update_item' => 'Update Case Study Taxonomy',
    'add_new_item' => 'Add New Case Study Taxonomy Item',
    'new_item_name' => 'New Case Study Taxonomy Name',
    'menu_name' => 'Case Study Taxonomy',
    'view_item' => 'Case Study Taxonomy'
  );

  // register taxonomy
  register_taxonomy(
    'caseStudy_taxonomy',
    'wpb_caseStudy',
    array(
      'labels' => $labels,
      'hierarchical' => true,
      'query_var' => true,
      'rewrite' => true,
      'taxonomies' => array('post_tag', 'category'),
    )
  );
}
add_action('init', 'create_caseStudy_taxonomy');
