
    <?php
    session_start();
    include("database.php");
    error_reporting(0);
    if($_POST['temperatura']!=null){
      $temp =  $_POST['temperatura'];
      $partes = explode(",", $temp);
      $query = $database->prepare("select id from Sensor where Nombre = 'Temperatura' order by id desc limit 1 where Cliente_Rut = '".$_SESSION['RUT']."'");
      $query->execute();
      $temperatura = $query->fetchall();

      $query = $database->prepare("UPDATE Sensor SET Limin = ".$partes[0].", Limax = ".$partes[1]." WHERE id = ".$temperatura[0][0]." and Cliente_Rut = '".$_SESSION['RUT']."'");
      $query->execute();

    }
    if($_POST['humedad']!=null){
      $hum = $_POST['humedad'];
      $partes = explode(",", $hum);
      $query = $database->prepare("select id from Sensor where Nombre = 'Humedad' order by id desc limit 1 ");
      $query->execute();
      $humedad = $query->fetchall();
      $query = $database->prepare("UPDATE Sensor SET Limin = ".$partes[0].", Limax = ".$partes[1]." WHERE id = ".$humedad[0][0]." and Cliente_Rut = '".$_SESSION['RUT']."'");
      $query->execute();
    }
    if($_POST['presion']!=null){
      $pres = $_POST['presion'];
      $partes = explode(",", $pres);
      $query = $database->prepare("select id from Sensor where Nombre = 'Temperatura' order by id desc limit 1 where Cliente_Rut = '".$_SESSION['RUT']."'");
      $query->execute();
      $presion = $query->fetchall();
      $query = $database->prepare("UPDATE Sensor SET Limin = ".$partes[0].", Limax = ".$partes[1]." WHERE id = ".$presion[0][0]." and where Cliente_Rut = '".$_SESSION['RUT']."'");
      $query->execute();
    }
    if($_POST['presion2']!=null){
      $pres2 = $_POST['presion2'];
      $partes = explode(",", $pres2);
      $query = $database->prepare("select id from Sensor where Nombre = 'Presion2' order by id desc limit 1 where Cliente_Rut = '".$_SESSION['RUT']."'");
      $query->execute();
      $presion2 = $query->fetchall();
      $query = $database->prepare("UPDATE Sensor SET Limin = ".$partes[0].", Limax = ".$partes[1]." WHERE id = ".$presion2[0][0]." and Cliente_Rut = '".$_SESSION['RUT']."'");
      $query->execute();
    }
    //echo $_POST['price-max']
    header("location:  sliders.php");

    ?>
