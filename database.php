<?php

$servername = "localhost";
$username = "root";
$password = "789123";
	try {
    $database = new PDO("mysql:host=$servername;dbname=Itecsoft", $username, $password);
    // set the PDO error mode to exception
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
    }

	catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


?>
