<?php 

$server = "localhost";
$user = "root" ;
$pin = "" ;
$dbname= "mydb" ;

 $conn  = mysqli_connect($server, $user, $pin,$dbname) ;
if( $conn -> connect_error)
{
	die(" connection failed" . $conn -> connect_error) ;
}
echo ' Success @ connecction with mysql ';


$sql = "SELECT * FROM student ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th> ID </th><th> Name </th><th> EMAIL </th><th>USER_NAME </th> <th>  PASSWORD </th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["ID"]."</td><td>".$row["NAME"]."</td><td>"
	.$row["EMAIL"]."</td><td>".$row["USER_NAME"]."</td><td>".$row["PASSWORD"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();



?>