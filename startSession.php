<?php 
session_start() ;
$name = $_SESSION["NAME"];
$age = $_SESSION["AGE"];
$weight = $_SESSION["WEIGHT"];
echo 'your name '. $name . '<br>' ;
echo 'your age '. $age . '<br>' ;
echo 'your weight '. $weight . '<br>' ;



?>