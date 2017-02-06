<?php

/**
 * Created by PhpStorm.
 * User: josip
 * Date: 03.02.17.
 * Time: 02:14
 */
class Sanitizer
{

    public static function sanitize(&$input)
    {

            htmlentities($input);


    }



}