<?php
session_start();
$x = $_GET['cuantos'];
$x = $x/2;
$arreglo = array();
for ($i=1; $i <= $x; $i++) {
	$indexA = "A".$i;
	$indexB = "B".$i;



	array_push($arreglo, $_GET[$indexA] , $_GET[$indexB] );


}

	include("database.php");
	$query = $database->prepare("insert into sector3ptos (Nombre,latitud1,longitud1,latitud2,longitud2,latitud3,longitud3,cliente_id) values (?,?,?,?,?,?,?,".$_SESSION['ID'].")") ;
	if ($x == 3 ) {
		$query->execute(array($_GET['nombre'],$_GET['A1'],$_GET['B1'],$_GET['A2'],$_GET['B2'],$_GET['A3'],$_GET['B3']));
		echo " LA WEA SALIO BIEN";
		header("Location: setearmapa.php");
	}
	if ($x == 4 ) {
		$query->execute(array($_GET['nombre'],$_GET['A1'],$_GET['B1'],$_GET['A2'],$_GET['B2'],$_GET['A3'],$_GET['B3'],$_GET['A4'],$_GET['B4']));
	}
	if ($x == 5 ) {
		$query->execute(array($_GET['nombre'],$_GET['A1'],$_GET['B1'],$_GET['A2'],$_GET['B2'],$_GET['A3'],$_GET['B3'],$_GET['A4'],$_GET['B4'],$_GET['A5'],$_GET['B5']));
	}
	if ($x == 6 ) {
		$query->execute(array($_GET['nombre'],$_GET['A1'],$_GET['B1'],$_GET['A2'],$_GET['B2'],$_GET['A3'],$_GET['B3'],$_GET['A4'],$_GET['B4'],$_GET['A5'],$_GET['B5'],$_GET['A6'],$_GET['B6']));
	}
	if ($x == 7 ) {
		$query->execute(array($_GET['nombre'],$_GET['A1'],$_GET['B1'],$_GET['A2'],$_GET['B2'],$_GET['A3'],$_GET['B3'],$_GET['A4'],$_GET['B4'],$_GET['A5'],$_GET['B5'],$_GET['A6'],$_GET['B6'],$_GET['A7'],$_GET['B7']  ));
	}

 ?>
