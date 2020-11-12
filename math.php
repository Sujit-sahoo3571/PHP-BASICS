<?php 
/* arithmatic operation */
$num1 =67 ;
$num2 =56 ;

// sum 
echo $num1+$num2 .'<br> ';
// sub
echo $num1-$num2 .'<br> ';
//mul  
echo $num1*$num2 .'<br> ';
// div
echo $num1/$num2 .'<br> ';
// modulo
echo $num1%$num2 .'<br> ';
# Arrays
$name = Array('bob', 'marlie','alice') ;
echo $name[0] .'<br>';
print_r ($name) .'<br>' ;
// assign 'key' => value 

$name = Array('bob' =>45, 'marlie'=> 66,'alice'=>78 ) ;
echo $name['bob'] .'<br>';
print_r ($name) .'<br>' ;

/* Array of Array */
$name = Array(Array('name','age','weight'),
					Array('bob' ,'23','66'),
					Array('marlie','56','78'),
					Array('alice','55','77')) ;
		echo '<br>' ;			
print_r($name) ;
echo '<br>' ;
//echo $name[0][0] ;
echo $name[1][0] ."   ";
echo $name[1][1]."   ";
echo $name[1][2]."   ";


?>