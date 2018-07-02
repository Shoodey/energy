<?php

if (! function_exists('set_menu_class')) {
    /**
     * Check if menu link refers to active url and return the class.
     *
     * @param mixed $route
     * @return string
     */
    function set_menu_class($route)
    {
        $type = gettype($route);
        $isActive = false;
        $routeName = request()->route()->action['as'];

        if($type === 'string'){
            $isActive = $route === $routeName;
        }elseif ($type === 'array'){
            $isActive = in_array($routeName, $route);
        }

        return $isActive ? 'active' : '';
    }
}