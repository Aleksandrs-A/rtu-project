<?php

class Dishes 
{
  public $id;
  public $Name;
  public $Calories; 
  function __construct()
  {
    $this->id = 0;
    $this->Name = 'Nan';
    $this->Calories = 0;
  }
  function setid($colo){
    $this->Calories = $colo;
    return;
  }
}

?>