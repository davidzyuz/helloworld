<?php

function config($key = '')
{
    $current_dir = getcwd();
    $cwd_array = explode('/', $current_dir);
    $i = count($cwd_array) - 1;

    $config = [
        'name' => 'Simple PHP Website',
        'site_url' => '',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v1.0.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}