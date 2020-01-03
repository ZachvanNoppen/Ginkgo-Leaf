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
$result = pg_query($conn,$sql);
$data = array();
if (!$result) {
  $debug =  "Error getting record: ";

} else {
    $debug = "Queried successfully";
    //Check if there is any
    if ($line = pg_fetch_assoc($result)) {
        if ($line['rows'] == 0) {
         $debug +=  " -- 0 records";
        }
    }
    else {
      while ($row = pg_fetch_array($result, NULL, PGSQL_BOTH)) {
          array_push($data, "{$row} <br>");
          //echo $row[]
      }
    }
}



?>
