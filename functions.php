<?php
// Functions file for theme One
/*
Theme Name: KCVC
Theme URI: www.kcvc.org
Author: Anthony, Bella, Dan, Kerstin
Author URI: www.dannfreydesign.com
Description: Website created King County Veterans Consortium. Dann and Bella were the designers and Anthony and Kerstin are the developers. 
Version: 1.0
*/

// the sidebar para widgets
register_sidebar(array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));

// Register Menus (You'll want these!)
register_nav_menus(array('mainmenu' => __('Main Menu'), 'mobilemenu' => __('Mobile Menu')));

// Because WP isn't smart enough to have this automatically set up. 
add_theme_support('post-thumbnails');

// excerpts
add_post_type_support('page','excerpt');

// title tag dynamic SEO 
function get_title_tag() {
    
    global $post;  // do not forget this because of variable scope!!!

    if(is_front_page()|| is_home()) { // front/blog

        bloginfo('description'); // tagline

    } elseif (is_page() || is_single()) { // page/posting
        
        echo get_the_title($post->ID);
    
    } else { //404/search etc.
        
        bloginfo('description'); // tagline

    }

    if ($post->post_parent) { //your sites parent pages

        echo ' | ';
        echo get_the_title($post->post_parent);

    }

    echo ' | ';
    echo 'King County Veterans Consortium'; //bloginfo('name'); would pull blog name from the site too
    echo ' | ';
    echo 'Seattle, WA';
}
// registers our mobile menu script
//function wp_enqueue_script( $mobile_menu, string $src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js') {}; 

//function the_content_filter($content) {
//    $block = join("|",array("one_third", "team_member"));
//    $rep = preg_replace("/(<p>)?\[(" . $block . ")(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
//    $rep = preg_replace("/(<p>)?\[\/(" . $block . ")](<\/p>|<br \/>)?/","[/$2]",$rep);
//return $rep;
//}
//add_filter("the_content", "the_content_filter");
remove_filter( 'the_content', 'wpautop' );
?>