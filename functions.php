<?php
/**
 * Theme Functions
 * 
 * @package webdesigner
 */
 
 
 
/* Register thumbnail support */

add_action( 'after_setup_theme', 'my_theme_register_thumbnail_support' );
function my_theme_register_thumbnail_support() {
    add_theme_support( 'post-thumbnails' );
}

/* Register the custom post type */

add_action( 'init', 'my_theme_register_custom_post_type' );
function my_theme_register_custom_post_type() {
    register_post_type( 'my_post_type', array(
        'label'    => 'My Post Type',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
    ) );
}

 

function clean_excerpt_more() {
    return '';
}

add_filter( 'excerpt_more', 'clean_excerpt_more' );

function custom_the_excerpt( $excerpt ) {
    global $post;

    if( $post->post_excerpt ) {
        // If the post has manual excerpt,
        // it already has a point to end
        // the paragraph, so we don't want
        // the point + the ellipsis: ....
        // Clean it!
        $ellipsis = '';
    } else {
        $ellipsis = '...';
    }

    // Save the link in a variable
    $link = $ellipsis . ' <a class="moretag" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Czytaj dalej &raquo;', 'starion' ) . '</a>';

    // Concatenate the link to the excerpt
    return $excerpt . $link;

    }

add_filter( 'get_the_excerpt', 'custom_the_excerpt' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 8;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.'';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
 
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); 


// Add to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Views');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
    if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}

function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'My Custom Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );



  

 ?>