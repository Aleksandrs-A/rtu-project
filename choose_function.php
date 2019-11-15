<?php
include 'class_Day.php';

//  ==============================================

function WriteFood($DPartFood,$DPD){
  echo '<div class="pagebreak row">';     
  echo '</div>';
  echo '<div class="mainform row">';
  echo '   <div class= "pagelist">';
  echo '       <div class="container">';
  echo '           <div class="img-col ">';
  echo '               <img class="main-image" src="img/food-img/1.png" alt="">';
  echo '           </div>';
  echo '           <div class="text-col col">';
  echo '                <div class="row justify-content-center">';
  echo '                  <h1 class="form-heading">'. $DPartFood->Name .'</h1>';
  echo '                      <div class="divider-custom divider-light">';
  echo '                      <div class="divider-custom-line"></div>';
  echo '                      <div class="divider-custom-icon">';
  echo '                        <i class="fas fa-heart"></i>';
  echo '                      </div>';
  echo '                      <div class="divider-custom-line"></div>';
  echo '                  </div>';
  echo '                </div>';
  echo '              <div class="row">';
  echo '                 <div class="col">';
  echo '                  <h2 class="form-dish-calories">Calories</h2>';
  echo '                  </div>';
  echo '                  <div class="col">';
  echo '                  <h2 class="form-dish-calories">'. $DPartFood->Calories .' kcal</h2>';
  echo '                  </div>';
  echo '                </div>';
  echo '              <div class="row">';
  echo '                 <div class="col">';
  echo '                  <h2 class="form-dish-recepy">Recepy</h2>';
  echo '                  </div>';
        echo '            <ul class="form-dish-list col">';
          echo '                            <li>One</li>';
          echo '                            <li>Two</li>';
          echo '                            <li>Three</li>';
          echo '                            <li>Four</li>';
        echo '            </ul>';      
  echo '                </div>';
  echo '           </div>';          
  echo '       </div>';
  echo '   </div>';
  echo '</div>';
  return;
}

//  ==============================================

function Ostatok($buz){echo "Ostatok: ". $buz->coloriesIsStill();}

//  ==============================================

function DayFill($buz){
  do{
    fillThisPart($buz->Breakfast,'breakfast');
    fillThisPart($buz->Lunch,'lunch');
    fillThisPart($buz->Dinner,'dinner');
  }while( ( $buz->coloriesIsStill() >= 150 ) );
  return;
}

//  ==============================================

function fillThisPart($FoodType,$tableName){
    $ranID = ReturnID($tableName);
    firstEat($FoodType,$ranID,$tableName);
}

//  ==============================================

function firstEat($PartDayFood,$rid,$tableName){
  // $mysqlbd = new mysqli("localhost","root","","trening");
  $mysqlbd = new mysqli("localhost","id11244110_roote","roote","id11244110_food_example");
  $res = $mysqlbd->query("SELECT * FROM `".$tableName."` WHERE `ID` = ".$rid);
  $mysqlbd->close();
  $row = $res->fetch_assoc();
  $PartDayFood->Name = $row["Name"];
  $PartDayFood->Calories = $row["Ccal"];
  return;
}

//  ==============================================

function howManyRows($tableName){
  // $mysqlbd = new mysqli("localhost","root","","trening");
  $mysqlbd = new mysqli("localhost","id11244110_roote","roote","id11244110_food_example");
  $res = $mysqlbd->query("SELECT COUNT(1) FROM " . $tableName);
  $row = $res->fetch_assoc();
  $mysqlbd->close();
  return $row["COUNT(1)"];
}

//  ==============================================

function ReturnID($tableName){ 
  $max = howManyRows($tableName);
  return rand(1,$max);
}

//  ==============================================

?>