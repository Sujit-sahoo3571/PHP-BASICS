<?php 
//session destroy 
session_start() ;

//unset($_SESSION["NAME"]);

session_destroy();
echo  ' Destroy All Session ! <br> session_destroy() ' ;
?>