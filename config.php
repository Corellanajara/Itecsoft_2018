<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

    <script src="dist/js/Chart.min.js"></script>
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/lineas.js"></script>
    

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="chart-container">
                <div>
                  <canvas id="line-chartcanvas"></canvas>
                </div>
                
              </div>

              <!-- javascript -->
                
          

      <div class="row">
        

  <?php
error_reporting(0);

if($_POST['temperatura'] != null) {
  $temp = $_POST['temperatura'];
  echo $temp;
  echo "<br>";
}
if($_POST['humedad']!=null){
  $hum =$_POST['humedad'] ;
  echo $hum;
  echo "   <br> ";
}
if($_POST['presion'] != null){
  $pre = $_POST['presion'];
  echo $pre;
  echo "<br>";
}
if($_POST['radiacion'] != null){
  $rad = $_POST['radiacion'];
  echo $rad;
  echo "<br>";
}
if($_POST['precipitacion'] != null){
  $prec = $_POST['precipitacion'];
  echo $prec;
  echo "<br>";
}
if($_POST['humedadr'] != null){
  $humr = $_POST['humedadr'];
  echo $humr;
  echo "<br>";
}
if($_POST['mosture'] != null){
  $most = $_POST['mosture'];
  echo $most;
  echo "<br>";
}
if($_POST['viento'] != null){
  $vie = $_POST['viento'];
  echo $vie;
}

 ?>
  
</body>
</html>
