<?php

namespace App\Helpers;

class General
{

    public static function getClass(): string
    {
        $routePath = request()->route()->getActionName();
        $route = explode('\\', $routePath);
        $class = explode('@', $route[count($route) - 1]); // end veya array_pop, array_shift
        $class = explode('Controller', $class[0]);
        return strtolower($class[0]);
//        return "user";
    }

    public static function getMethod()
    {
        $routePath = request()->route()->getActionName();
        $route = explode('\\', $routePath);
        $class = explode('@', $route[count($route) - 1]);
        return match ($class[1]) {
            'store', 'create' => 'can_create',
            'update', 'edit' => 'can_update',
            'destroy' => 'can_delete',
            default => 'can_view',
        };
//        return "can_view";
    }
}
