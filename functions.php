<?php

add_theme_support('menus');

register_nav_menus(array(
    'top' => 'Верхнее меню',
    'bottom' => 'Нижнее меню'
));

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'add_theme_scripts', 25);

function add_theme_scripts()
{
    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('sidebar', get_template_directory_uri() . '/css/sidebar.css');

    if (is_front_page() || is_home()) {
        wp_enqueue_style('front-page', get_template_directory_uri() . '/css/front-page.css');
    }

    // if (is_page()){ }
        wp_enqueue_style('page-content', get_template_directory_uri() . '/css/page-content.css');

   

    wp_enqueue_style('slider', get_template_directory_uri() . '/css/slider.css');
    wp_enqueue_script('slider', get_template_directory_uri() . '/js/slider.js', array('jquery'), null, true);
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

require_once('carbon-fields.php');
require_once('disable-gutenberg.php');
require_once('new-post-types.php');

add_filter('template_include', 'my_template');
function my_template($template)
{
    if (is_front_page() || is_home()) {
        $template = get_template_directory() . '/template-page/front-page.php';
        return $template;
    }
    if (is_archive('new')  ) {
        $template = get_template_directory() . '/template-page/page-cliets.php';
        // $template = get_template_directory() . '/template-page/page-news.php';

        return $template;
    }

    if (!is_archive(93) && !is_page(88) && !is_page(91) ) {
       
        $template = get_template_directory() . '/template-page/page-archive.php';
        return $template;
    }

    if (!is_page(91) && !is_page(93)){
        $template = get_template_directory() . '/template-page/page-content.php';
        return $template;
    }
    if (is_singular() && !is_page(91) && !is_page(93) ) {
        $template = get_template_directory() . '/template-page/page-single.php';
        return $template;
    }
    

    return $template;
}