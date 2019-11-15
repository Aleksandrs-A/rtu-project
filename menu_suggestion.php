<?php
include 'choose_function.php';

$buz = new Day();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Happy Avocado</title>
    
<!-- Latest compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main-menu.css">
    <link href="css/all.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body>
  <?php  DayFill($buz) ?>
  <?php  
    WriteFood($buz->Breakfast,'Breakfast');
    WriteFood($buz->Lunch,'Lunch');
    WriteFood($buz->Dinner,'Dinner');
    //Ostatok($buz);
  ?>
</body>
</html>