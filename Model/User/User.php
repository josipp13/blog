<?php

/**
 * Created by PhpStorm.
 * User: josip
 * Date: 03.02.17.
 * Time: 01:35
 */
class User
{

    protected $username;
    protected $password;
    protected $email;

    public function __construct($username,$password,$email=null)
    {
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
    }

    //seter
    public function setUsername($username)
    {
        $this->username=$username;


    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setEmail($email)
    {
        $this->email=$email;

    }
    //geter
    public function getUsername()
    {
        return $this->username;


    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {

        return $this->email;

    }



}

