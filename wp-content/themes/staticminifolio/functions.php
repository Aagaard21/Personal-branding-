<?php

function load_scripts() {
    wp_enqueue_style('bootstrap-min-css',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('jquery.fancybox.css',get_template_directory_uri().'/css/jquery.fancybox.css');
     wp_enqueue_style('main.css',get_template_directory_uri().'/css/main.css');
      wp_enqueue_style('responsive.css',get_template_directory_uri().'/css/responsive.css');
       wp_enqueue_style('animate.min.css',get_template_directory_uri().'/css/animate.min.css');
           wp_enqueue_style('font-awesome.min.css','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
   
 //first parameter is the id or name of the file we are adding
 //second parameter is the path to the file we are adding
 //third parameter is dependecy and typically there is no dependecy
 //fourth parameter is the version of the file we are adding 
 //fifth parameter tells whether you want to add the script in the footer section of your web-document
 
wp_enqueue_script('jquery-min-js','https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',array(),'1.11.3','true');
wp_enqueue_script('bootstrap-min-js',get_template_directory_uri().'/js/bootstrap.min.js',array(),'null','true');
wp_enqueue_script('jquery.fancybox.pack.js',get_template_directory_uri().'/js/jquery.fancybox.pack.js',array(),'null','true');
wp_enqueue_script('jquery.waypoints.min.js',get_template_directory_uri().'/js/jquery.waypoints.min.js',array(),'null','true');
#wp_enqueue_script('retina.min.js',get_template_directory_uri().'/js/retina.min.js',array(),'null','true');
wp_enqueue_script('modernizr.js',get_template_directory_uri().'/js/modernizr.js',array(),'null','true');
wp_enqueue_script('main.js',get_template_directory_uri().'/js/main.js',array(),'null','true');


}
//this will execute scripts together with the function load_script
add_action('wp_enqueue_scripts','load_scripts');

//this will execute widgets together with the function, minifolio_sidebars
add_action('widgets_init','minifolio_sidebars');


//creating sidebars 
function minifolio_sidebars() {
    register_sidebar(
        array(
            'name' => 'Banner',
            'id' => 'banner',
            'description' => 'Please, drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            )
        );
        
        register_sidebar(
        array(
            'name' => 'About me',
            'id' => 'about-me',
            'description' => 'Please, drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            )
        );
        
            register_sidebar(
        array(
            'name' => 'About me 2',
            'id' => 'about-me2',
            'description' => 'Please, drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            )
        );
        
            register_sidebar(
        array(
            'name' => 'Hire me',
            'id' => 'hire-me',
            'description' => 'Please, drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            )
        );
        
            register_sidebar(
        array(
            'name' => 'Contact',
            'id' => 'contact',
            'description' => 'Please, drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            )
        );
        
        register_sidebar(
        array(
            'name' => 'Footer Area',
            'id' => 'footer',
            'description' => 'Please, drag your widgets here',
            'before_widget' => '<div class="widget_wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            )
        );
    
    
}








