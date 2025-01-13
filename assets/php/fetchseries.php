<?php


include ("connection.php");

$query = $mysqli->query("SELECT * FROM Serie;"); 

echo json_encode($query->fetch_assoc());

?>