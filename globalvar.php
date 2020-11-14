<?php 
$name =" Sujit ";
$health =100;
$Weapon = 5 ;

function check(){
	global  $name, $health , $Weapon ;
	echo $name .'health  ' . $health .'Weapon carry ' .$Weapon .' <br> ' ;
	
}
check () ; 

?>