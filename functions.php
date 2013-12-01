<?php

function no_of_comments() {
    printf(get_comments_number(). ' comments');
}

if (function_exists('register_sidebar')) {
    register_sidebar (array (
        'name' => 'right-sidebar-leftcol',
        'id' => 'leftcol',
        'before_widget' => '<li class="widget-container">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
} 
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'right-sidebar-rightcol',
        'id' => 'rightcol',
        'before_widget' => '<li class="widget-container">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}
