<?php
/*
Plugin Name: Cazamba
Plugin URI: http://www.cazamba.com
Description: Plugin para implementação de script Cazamba
Author: Cazamba
Version: 1.2
Author URI: http://www.cazamba.com
 */

function cazamba_display()
{

    $token = get_option('cazamba_token');
    if ($token != '') {
        echo '<script data-cfasync="false" src="https://api.cazamba.com/' . $token . '.js" type="text/javascript"></script>';
    }

    return 1;
}

function cazamba_admin_pg()
{
    include 'cazamba_admin.php';
}

function cazamba_admin()
{
    add_options_page("Cazamba", "Cazamba", 1, "Cazamba", "cazamba_admin_pg");
}

add_action('admin_menu', 'cazamba_admin');

add_action('wp_head', 'cazamba_display');
