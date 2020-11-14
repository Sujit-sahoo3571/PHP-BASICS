<?php 
// function with Argument 
function Say ( $name ){
	echo " Welcome to my home ! ".$name .'<br> ' ;
	echo " Happy Diwali " ;
	
}

// day/m/yr or d-m-y 
$Date = date("d-m-y");

echo " Date Today  " . $Date . '<br>'  ;

$date2 = date ("d/m/y") ;
echo  " Date today  date2  " . $date2 . '<br>' ;
//h-i-s(hr-minute- sec)

$Time = date("H-i-s") ;
echo " Date today  date2  " . $Time  . '<br>';
$Time1 = date("h:i:s") ;
echo " Date today  date2  " .$Time1 . '<br>' ;


//function call 

function call($val , $rate)
{
	$result = $val * $rate ;
	return $result ;
}

$final =  call(23,50) ;
echo ' first ' . $final  . '<br>';
$final = call(30,77);
echo ' second ' .$final . '<br>';
$final = call(100,5);
echo ' third ' . $final  . '<br>';
	

?>