<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


if (!function_exists('active_link')) {
    function menu_active($controller)
    {
        $ci = get_instance();

        $class =  $ci->router->fetch_class();

        return ($class == $controller) ? 'active' : '';
    }
}
