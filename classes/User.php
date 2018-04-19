<?php

class User{

    public $level;
    public $name;
    public $password;
  
    public function __construct ($level, $name,$password) {
      $this->level = $level;
      $this->name = $name;
      $this->password = $password;
    }

    public function setLevel($level)
    {
    $this->level = $level;
    } 
    public function getLevel()
    {
    return $this->level;
    }

    public function setName($name)
    {
    $this->name = $name;
    } 
    public function getName()
    {
    return $this->name;
    }

    public function setPassword($password)
    {
    $this->password = $password;
    } 
    public function getPassword()
    {
    return $this->password;
    }

    

}