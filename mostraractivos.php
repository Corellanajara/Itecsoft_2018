<?php
include("database.php");
$var = $database->prepare("SELECT * FROM sensor Where activo = 1 LIMIT 3 and Cliente_Rut = '".$_SESSION['RUT']."'");
$var->execute();
// value 4  limite inferior
// value 5 limite superior
$sensores = $var->fetchall();
foreach ($sensores as $key => $value) {
	# code...
	echo "<br>";
	if($value[1] == "Temperatura"){
		if($value[2] > $value[5] ){
			echo " ".$value[1]. " = ".$value[2]." es mayor del limite" ;
		}
		if($value[2] < $value[4] ){
			echo " ".$value[1]. " = ".$value[2]." es menor del limite";
		}
		if($value[2] > $value[4] && $value[2] < $value[5] ){
			echo " ".$value[1]. " = ".$value[2]." esta en el limite";
		}
	}
	if($value[1] == "Presion"){
		if($value[2] > $value[5] ){
			echo " ".$value[1]. " = ".$value[2]." es mayor del limite" ;
		}
		if($value[2] < $value[4] ){
			echo " ".$value[1]. " = ".$value[2]." es menor del limite";
		}
		if($value[2] > $value[4] && $value[2] < $value[5] ){
			echo " ".$value[1]. " = ".$value[2]." esta en el limite";
		}
	}
	if($value[1] == "Humedad"){
		if($value[2] > $value[5] ){
			echo " ".$value[1]. " = ".$value[2]." es mayor del limite" ;
		}
		if($value[2] < $value[4] ){
			echo " ".$value[1]. " = ".$value[2]." es menor del limite";
		}
		if($value[2] > $value[4] && $value[2] < $value[5] ){
			echo " ".$value[1]. " = ".$value[2]." esta en el limite";
		}
	}
}

?>
