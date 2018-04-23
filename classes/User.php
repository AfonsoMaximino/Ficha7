<?php

class User {

    public $full_name;
    public $login_name;
    public $password;
    public $email;
    
    public function __construct ($full_name, $login_name, $password, $email) {
      $this->full_name = $full_name;
      $this->login_name = $login_name;
      $this->password = $password;
      $this->email = $email;
    
    }
    public function setFull_Name($full_name)
    {
    $this->full_name = $full_name;
    } 
    public function getFull_Name()
    {
    return $this->full_name;
    }

    public function setLogin_Name($login_name)
    {
    $this->login_name = $login_name;
    } 
    public function getLogin_Name()
    {
    return $this->login_name;
    }

    public function setPassword($password)
    {
    $this->password = $password;
    } 
    public function getPassword()
    {
    return $this->password;
    }

    public function setEmail($email)
    {
    $this->email = $email;
    } 
    public function getEmail()
    {
    return $this->email;
    }
}