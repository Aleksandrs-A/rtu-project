<?php
include 'class_food.php';

$buz = new Day();

function WriteFood($DPartFood,$DPD){
  echo "<he>";
  echo "<h3>".strtoupper($DPD)."</h3>";
  echo "<p> Предлогаем вам :" . $DPartFood->Name .  " на ".$DPD."</p>";
  echo "<p> Это будет: " . $DPartFood->Calories ." калорий </p> <hr>";
  return;
}

function Ostatok($buz){echo "Ostatok: ". $buz->coloriesIsStill();}


function DayFill($buz){
    fillThisPart($buz->Breakfast,'breakfast');
    fillThisPart($buz->Lunch,'feat');
    fillThisPart($buz->Dinner,'dinner');
}

function fillThisPart($FoodType,$tableName){
    $ranID = ReturnID($tableName);
    firstEat($FoodType,$ranID,$tableName);
}

function firstEat($PartDayFood,$rid,$tableName){
  $mysqlbd = new mysqli("localhost","root","","trening");
  $res = $mysqlbd->query("SELECT * FROM ".$tableName." WHERE ID = ".$rid);
  $mysqlbd->close();
  $row = $res->fetch_assoc();
  $PartDayFood->Name = $row["Name"];
  $PartDayFood->Calories = $row["Color"];
  return;
}

function howManyRows($tableName){
  $mysqlbd = new mysqli("localhost","root","","trening");
  $res = $mysqlbd->query("SELECT COUNT(1) FROM " . $tableName);
  $row = $res->fetch_assoc();
  $mysqlbd->close();
  return $row["COUNT(1)"];
}


function ReturnID($tableName){ 
  $max = howManyRows($tableName);
  return rand(1,$max);
}

?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
  <style>
    body{
      background-color: #DCDCDC;
    }
    p{
     font-size: 20px;
    } 
    h3{
     font-size: 24px;
    }
  </style>
 </head>
 <body>

  <h1>Меню на день</h1>
  <?php  DayFill($buz) ?>

  <?php  WriteFood($buz->Breakfast,'Breakfast') ?>

  <?php  WriteFood($buz->Lunch,'Lunch') ?>

  <?php  WriteFood($buz->Dinner,'Dinner') ?>

  <?php  Ostatok($buz) ?>

  <hr>
 </body>
</html>
