<?php 
//session destroy 
session_start() ;

unset($_SESSION["NAME"]);
echo  ' NAME unset Successfully ! ' ;
?>