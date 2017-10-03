<?php

/**
 * Created by SAIED-LOAI-LAKHDAR.
 * User: DjelfaNetwork
 * Date: 01-10-2017
 * Time: 4:39
 */
namespace DN\LIB ;

class Autoload{

    public static function autoload($classname)
    {
        $classname = str_replace('DN' , '' , $classname) ;
        $classname = strtolower($classname);
        $classname = APTH.DS.$classname.'.dn_cls.php' ;
        if (file_exists($classname)) {
            require_once $classname ;
        }

    }
}

spl_autoload_register(__NAMESPACE__.'\Autoload::autoload') ;






