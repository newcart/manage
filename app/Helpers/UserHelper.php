<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserHelper
{
    public static function getTypeId()
    {
        return Auth::user()->user_type_id;
    }

    public static function getType()
    {
        return Session::get('user_type');
    }

    public static function getId()
    {
        return Auth::user()->user_id;
    }
}
