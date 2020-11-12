<?php
//while and do while loop 
$count = 1;
while($count <10){
	$count++ ;
	echo 'hi ! sujit , nice to meet you '. $count . '<br>' ;
}
echo '<br> <br> ' ;
do {
	$count-- ;
	echo 'i am smart '. $count .'<br> ' ;
} while($count >0 ) ;
// for loop  and foreach loop
 for( $val =300 ; $val <= 1000 ; $val +=100 )
 echo $val .'<br>' ;
 //for each loop with 1d array 
 $names = Array('Bob' , ' marley ','hops','qeen' , 'alice ' ,' IsaBella ') ;
 foreach($names as $name){
	 echo $name . ' ' ;
 }
 for($i = 0 ; $i< 6; $i+=1){
	 echo $names[$i] .' ' ; 
 }
 echo '<br><br>' ;
 //for each loop with 2d array 
 
 $names = Array (Array('name' =>'Bob','age'=> 22, 'weight' =>56),
				 Array('name' =>'marley','age'=> 24, 'weight' =>66),
				 Array('name' =>'hops','age'=> 25, 'weight' =>76),
				 Array('name' =>'alice','age'=> 26, 'weight' =>86),
				 Array('name' =>'IsaBella','age'=> 27, 'weight' =>96)) ;
foreach ($names as $first=>$second){
echo $first . '   ' ;

// echo $second . '<br > ' ; Error 
foreach ($second as $third){
echo $third . '  ';
}
//'<br > ' ;
echo '<br>' ;
}
?>