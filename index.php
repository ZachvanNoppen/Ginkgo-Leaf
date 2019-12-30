<?php

/* the following is the conenction info for the // DB

$conn = pg_connect(getenv("DATABASE_URL"));

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo 'Initial Connect Failed';
}
$name =$_POST["name"];

$sql = "UPDATE testnames SET name='$name' WHERE pid=0";

if (!pg_query($conn,$sql)) {
  echo "Error updating record: ";

} else {
    echo "Record updated successfully";
}

*/

header("Location: submit.html");
exit;
?>
