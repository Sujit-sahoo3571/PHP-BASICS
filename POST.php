<?php
//$USER = $_POST["$user"] ; ERROR ($) 

//echo $_POST["user"] ; success 

$USER = $_POST["user"] ;
$PASS = $_POST["pass"] ;

echo $USER . "  " . $PASS .'<br>' ;
if(!empty($USER) && !empty($PASS)){
	if($USER === "SUJIT" && $PASS === "7890")
	ECHO ' WELCOME '. $USER .' !! <BR>' ;
	ELSE ECHO 'UNAUTHERIZED USER ! <BR> ' ;
}
ELSE {
	ECHO ' ALL FIELD ARE REQUIRD ! ' ;
}


?>