<?php

//echo $_GET["name"] ;
$USER = $_GET["user"] ;
$PASS = $_GET["pass"] ;
$MSG = $_GET["msg"] ;

// echo $USER .' ' .$PASS .' ' .$MSG .'<br >' ; # success
if(!empty($USER) and !empty($PASS) && !empty($MSG)){
	echo $USER .' ' .$PASS .' ' .$MSG .'<br >'.'<br>'  .'<br>' ;
	echo 'Login Successful !!! ' .'<br>'  .'<br>' .'Hello ' .$USER ;
}
else 
 echo ' ALL FIELD ARE REQUIRD ! ' ;


?>