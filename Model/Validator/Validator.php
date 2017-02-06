<?php

/**
 * Created by PhpStorm.
 * User: josip
 * Date: 03.02.17.
 * Time: 02:06
 */
class Validator
{


    //username must beginn with a letter, contain only letters and numbers
    public static function validateUsername($name)
    {
        if (preg_match('/^[a-zA-Z]|[a-zA-Z0-9]{19}$/', $name))
            return true;
        else
            return false;


    }

    public static function validatePassword($pass)
    {

        if (preg_match('/^[a-zA-Z0-9]{8,20}$/', $pass))
            return true;
        else
            return false;


    }

    public static function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return false;

        else
            return true;


    }



}

