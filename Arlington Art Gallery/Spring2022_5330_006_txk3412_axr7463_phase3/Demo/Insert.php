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
  $stateName = filter_input(INPUT_POST, 'stateName');
  $stateAb = filter_input(INPUT_POST, 'stateAb');
  

$query = "INSERT INTO state (stateAb, stateName)
values ('$stateAb','$stateName')";
if ($conn->query($query)){
	echo "New record is inserted sucessfully";
	}
else{
echo "Error: ". $query ."
". $conn->error;
}
}
?>