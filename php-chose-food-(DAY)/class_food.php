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

#  

class Day extends Dishes
{
  public $Breakfast;
  public $Lunch;
  public $Dinner;
  public $Calories_at_day;
  function __construct()
  {
    $this->Breakfast=new Dishes();
    $this->Lunch=new Dishes();
    $this->Dinner=new Dishes();
    $this->Calories_at_day= 1500; # need to change to SQL query or calculator
  }
  function coloriesIsStill(){
    $timepar = $this->Calories_at_day;
    $timepar = $timepar - $this->Breakfast->Calories;
    $timepar = $timepar - $this->Lunch->Calories;
    $timepar = $timepar - $this->Dinner->Calories;
    return $timepar;
  }
}

?>