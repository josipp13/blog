<?php

/**
 * Created by PhpStorm.
 * User: josip
 * Date: 06.02.17.
 * Time: 01:10
 */
require_once 'DBInterface/Database/Database.php';
require_once 'Model/User/User.php';

class DBManager
{


    public function findUsername($username)
    {


        $db = Database::getConnection();

        $st = $db->prepare("SELECT * FROM USERS WHERE USERNAME=:username");

        $st->execute(array('username'=>$username) );

        return $st->fetchAll();


    }

    public function insertUser(User $user)
    {
        $db=Database::getConnection();

        $st=$db->prepare("INSERT INTO USERS(username,password,email)VALUES(:username,:password,:email)");

        $st->execute(
                        array(
                                'username'=>$user->getUsername(),
                                'password'=>$user->getPassword(),
                                'email'   =>$user->getEmail()
                            )
                    );



    }



}

$user=new User('Marko','1234','marko@super.com');

$dbm=new DBManager();

$dbm->insertUser($user);


