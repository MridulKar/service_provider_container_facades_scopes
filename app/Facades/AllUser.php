<?php

namespace App\Facades;

use App\Models\User;

class AllUser{

    public static function getThemAll(){
        return User::all();
    }

}
