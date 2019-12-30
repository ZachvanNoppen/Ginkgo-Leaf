<?php
//Connecting to the main DB

$conn = pg_connect(getenv("DATABASE_URL"));

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo 'Initial Connect Failed';
}

$name =$_POST["name"];

$sql = "SELECT * FROM gallery WHERE type = 'visual'";

$debug = "";
if (!pg_query($conn,$sql)) {
  $debug =  "Error getting record: ";

} else {
    $debug "Record updated successfully";
}

?>
