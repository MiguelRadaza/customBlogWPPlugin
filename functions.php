<?php

    function custom_blog_theme_support()
    {
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'custom_blog_theme_support');

    function custom_blog_register_style()
    {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('customBlog-style', get_template_directory_uri() . "/style.css", array('customBlog-bootstrap'), $version, 'all');
        wp_enqueue_style('customBlog-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), "5.0.2", 'all');
        wp_enqueue_style('customBlog-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css", array(), "6.4.2", 'all');
    }
    add_action('wp_enqueue_scripts', 'custom_blog_register_style');

    function custom_blog_register_scripts()
    {
        // wp_enqueue_script('customBlog-style', get_template_directory_uri() . "/style.css", array('customBlog-boostrap'), $version, 'all');
        wp_enqueue_script("customBlog-bootstrap-min", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), "5.0.2", true);
        wp_enqueue_script('customBlog-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js", array(), "2.9.2", true);
        wp_enqueue_script('customBlog-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js", array(), "5.0.2",true);
    }
    add_action('wp_enqueue_scripts', 'custom_blog_register_scripts');
?>
