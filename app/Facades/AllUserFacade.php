<?php

namespace App\Facades;

class AllUserFacade{

    protected static function getFacadeAccessor(){
        return 'AllUser'; // here AllUser is the name of object of AllUser Class
    }

}
