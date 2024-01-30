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

$query = "DELETE FROM state WHERE stateName = '$stateName'";

if ($conn->query($query)){
	echo "Deleted successfully";
	}
else{
echo "Error: ". $del ."
". $conn->error;
}
}
?>
