<?php
if(!empty($_POST)){
  $var = join(" ",$_POST);
  $partes = explode("?",$var);
  $temp = $partes[0];
  $humd = $partes[1];
  $pres = $partes[2];

  $server = "localhost";
  $user = "root";
  $pass = "789123";
  $dbname = "Itecsoft";

  $conn =  new mysqli($server,$user,$pass,$dbname);
  if( $conn ->conect_error){
    die("fallo la conexion ".$conn->connect_error);
  }else{
    echo $temp;
      echo "conectado a la base de datos";
  }

  $temp = "insert into temperatura (magnitud,id_sector,hora.cliente_id,nombre) values (".$temp.",1,now(),1,'temperatura')";
  $humd = "insert into humedad (magnitud,id_sector,hora.cliente_id,nombre) values (".$humd.",1,now(),1,'humedad')";
  $pres = "insert into presion (magnitud,id_sector,hora.cliente_id,nombre) values (".$pres.",1,now(),1,'presion')";

  if($conn->query($temp) && $conn->query($humd) && $conn->query($pres)){
    echo "Subido con exito";

  }else{
    echo $temp ;
    echo $humd ;
    echo $pres ;
      echo "Error : ". $sql. " error".$conn->error;
  }

  $conn->close();
}
 ?>
