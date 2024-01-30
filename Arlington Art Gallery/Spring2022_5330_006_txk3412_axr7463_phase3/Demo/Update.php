<?php
$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "";
$dbname = "art gallery";

$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);

if(!$conn) {
  die("Connection failed");
}
else{
	  $stateAb = filter_input(INPUT_POST, 'stateAb');
	  $stateName = filter_input(INPUT_POST, 'stateName');
  
  
  $query = "UPDATE state SET stateAb = '$stateAb' WHERE stateName = '$stateName'";
  if ($conn->query($query)){
	echo "Record updated sucessfully";
	}
else{
echo "Error: ". $query ."
". $conn->error;
}
}
?>