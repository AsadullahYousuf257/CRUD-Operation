<?php

include 'db_conn.php';

$sql = "SELECT * FROM `notes`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo  $num;
echo "Records found in the database<br>";

?>