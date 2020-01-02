<?php
//Connecting to the main DB

$conn = pg_connect(getenv("DATABASE_URL"));
$result = "";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo 'Initial Connect Failed';
}

$name =$_POST["name"];

$sql = "SELECT title FROM gallery WHERE type = 'visual'";

$debug = "";
if (!pg_query($conn,$sql)) {
  $debug =  "Error getting record: ";

} else {
    $debug = "Record updated successfully";
    $result = pg_query($conn,$sql);
}

?>
