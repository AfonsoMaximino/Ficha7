<?php

class Worker extends User{

    public $level;
    public $company;
    public $position;
    
    public function __construct ($level, $company, $position) {
      $this->level = $level;
      $this->company = $company;
      $this->position = $position;
    }

    public function setLevel($level)
    {
    $this->level = $level;
    } 
    public function getLevel()
    {
    return $this->level;
    }

    public function setCompany($company)
    {
    $this->company = $company;
    } 
    public function getCompany()
    {
    return $this->company;
    }

    public function setPosition($position)
    {
    $this->position = $position;
    } 
    public function getPosition()
    {
    return $this->position;
    }


}