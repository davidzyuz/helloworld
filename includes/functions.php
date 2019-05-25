<?php

// Displays site name
function site_name()
{
    echo config('name');
}

// Displays site url
function site_url()
{
    echo config('site_url');
}

// Displays site version
function site_version()
{
    echo config('version');
}

// Website navigation
function nav_menu($sep = ' | ')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');
    foreach ($nav_items as $uri => $name) {
        $class = str_replace('page=', '', $_SERVER['QUERY_STRING']) == $uri ? ' active' : '';
        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;

        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
    }

    echo trim($nav_menu, $sep);
}

// Displays page title
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';

    echo ucwords(str_replace('-', ' ', $page));
}

//Displays page content

function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.php';

    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.php';
    }

    echo file_get_contents($path);
}

// Starts everything
function init() 
{
    require config('template_path') . '/template.php';
}