<?php
  session_start();
/**
 * filename: data.php
 * description: this will return the score of the teams.
 */

//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '789123');
define('DB_NAME', 'Itecsoft');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$temperatura = sprintf("SELECT *  FROM temperatura  where cliente_id = ".$_SESSION['ID']." ORDER BY id");
$humedad = sprintf("SELECT *  FROM humedad where cliente_id = ".$_SESSION['ID']." ORDER BY id");
$presion = sprintf("SELECT *  FROM presion  where cliente_id = ".$_SESSION['ID']." ORDER BY id");
//execute query
$result1 = $mysqli->query($temperatura);
$result2 = $mysqli->query($humedad);
$result3 = $mysqli->query($presion);

//loop through the returned data

$data = array();
foreach ($result1 as $row) {
	$data[] = $row;
}
foreach ($result2 as $row) {
	$data[] = $row;
}
foreach ($result3 as $row) {
	$data[] = $row;
}

//free memory associated with result
$result1->close();
$result2->close();
$result3->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
