<?php

/**
 * Created by PhpStorm.
 * User: josip
 * Date: 02.02.17.
 * Time: 23:11
 */
class Autoloader
{
    public static function ControllerLoader($classname)
    {
            require_once 'Controller/'.$classname.'/'.$classname.'.php';


    }

    public static function ModelLoader($classname)
    {

            require_once 'Model/'.$classname.'/'.$classname.'php';


    }

    public static function ViewLoader($classname)
    {

            require_once 'View/'.$classname.'/'.$classname.'php';



    }



}