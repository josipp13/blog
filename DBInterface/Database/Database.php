<?php

/**
 * Created by PhpStorm.
 * User: josip
 * Date: 04.02.17.
 * Time: 04:18
 */

require_once 'DBSettings.php';


class Database
{
    private static $database=null;

    final private  function __construct(){}
    final private function __clone(){}

    public static function getConnection()
    {
            if(Database::$database===null)
            {
                global $db_base, $db_user, $db_pass;
                Database::$database=new PDO($db_base, $db_user, $db_pass);


            }

            return Database::$database;
    }




}



