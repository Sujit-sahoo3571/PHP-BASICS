<?php 
//setcookie('name','value','expire','path','domain')

//set time 
$time = time();
echo $time ;

setcookie('student', 'Beautiful Mind', $time+10);

echo "<br> cookie set for t- 10 sec for " ;


?>